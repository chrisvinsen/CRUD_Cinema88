<?php
    session_start();
    
    require_once "../model/config.php";

    $email_err = $pass_err = "";
    $email = $pass = "";

    $messages = '';

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        //Email Validation
        $input_email = trim(stripslashes(htmlentities(strip_tags(htmlspecialchars($_POST['email'])))));
        if(empty($input_email)){
            $email_err = "Please enter an email.";
        }else if(!filter_var($input_email, FILTER_VALIDATE_EMAIL)){
            $email_err = "Email is not a valid email address";
        }else{
            $email = $input_email;
        }
        
        //Password Validation
        $input_pass = trim(stripslashes(htmlentities(strip_tags(htmlspecialchars($_POST['password'])))));
        if(empty($input_pass)){
            $pass_err = "Please enter a password.";     
        }else{
            $pass = $input_pass;
        }

        if(empty($email_err) && empty($pass_err)){

            $sql = "SELECT * FROM employee WHERE email_employee = :email";

            if($stmt = $pdo->prepare($sql)){

                $stmt->bindParam(":email", $param_email);

                $param_email = $email;
                $param_password = $pass;

                if($stmt->execute()){
                    if($stmt->rowCount() == 1){
                        $row = $stmt->fetch(PDO::FETCH_ASSOC);
                        
                        $param_password = md5($param_password);

                        if($row["password"] == $param_password){
                            // session_start();
                            $_SESSION['email'] = $param_email;
                            $_SESSION['role'] = $row['role'];
                            $_SESSION['status'] = "login";

                            $parts = explode("@", $param_email);
                            $user_name = $parts[0];

                            $_SESSION['user'] = $user_name;

                            header("Location: index.php");
                            exit();
                        }else
                            $messages =  "Wrong Password. Please try again";
                    }else{
                        $messages =  "Wrong Email. Please try again";
                    }
                }else{
                    $messages = "Oops! Something went wrong. Please try again later.";
                }
            }
            unset($stmt);
        }
        unset($pdo);
    }
?>