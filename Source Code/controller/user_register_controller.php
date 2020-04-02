<?php 
    
    session_start();
    require_once "../model/config.php";

    date_default_timezone_set('Asia/Jakarta');

    // Define variables and initialize with empty values
    $email = $role = $password = "";
    $email_err = $role_err = $password_err = $cpassword_err = "";

    // Processing form data when form is submitted
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        //Email Validation
        $input_email = trim(stripslashes(htmlentities(strip_tags(htmlspecialchars($_POST['email'])))));
        $sql1 = "SELECT * FROM employee WHERE email_employee= :email";
        $stmt = $pdo->prepare($sql1);
        $stmt->bindParam(":email", $input_email);
        $stmt->execute();
        $cek = $stmt->fetch(PDO :: FETCH_ASSOC);
        if(!$cek){
            if(empty($input_email)){
                $email_err = "Please enter an email.";
            }else if(!filter_var($input_email, FILTER_VALIDATE_EMAIL)){
                $email_err = "Email is not a valid email address.";
            }else{
                $email = $input_email;
            }
        }else{
            $email_err = "Email is already registered.";
        }
            

        //Role Validation
        if(isset($_POST['role'])){
            $input_role = trim(stripslashes(htmlentities(strip_tags(htmlspecialchars($_POST['role'])))));
            $role = $input_role;
        }else{
            $role_err = "Please enter your role.";     
        }
        
        //Password Validation
        $input_pass = trim(stripslashes(htmlentities(strip_tags(htmlspecialchars($_POST['password'])))));
        if(empty($input_pass)){
            $password_err = "Please enter a password.";     
        }else if(strlen($input_pass) < 8){
            $password_err = "Password must be at least 8 characters.";
        }

        // Confirm Password Validation
        $input_cpass = trim(stripslashes(htmlentities(strip_tags(htmlspecialchars($_POST['cpassword'])))));
        if(empty($input_cpass)){
            $cpassword_err = "Please enter a password.";     
        }else if(strlen($input_cpass) < 8){
            $cpassword_err = "Password must be at least 8 characters.";
        }else if($input_pass != $input_cpass){
            $cpassword_err = "Password doesn't match.";
        }else{
            $password = $input_cpass;
        }

        if(empty($email_err) && empty($role_err) && empty($pass_err) && empty($cpassword_err)){
            // Prepare an insert statement
            $sql = "INSERT INTO employee VALUES (:email_employee, :role, :password)";
     
            if($stmt = $pdo->prepare($sql)){    
                // Bind variables to the prepared statement as parameters
                $stmt->bindParam(":email_employee", $param_email);
                $stmt->bindParam(":role", $param_role);
                $stmt->bindParam(":password", $param_password);
                
                // Set parameters
                $param_email = $email;
                $param_role = $role;
                $param_password = md5($password);
                
                // Attempt to execute the prepared statement
                if($stmt->execute()){
                    // Records created successfully. Redirect to landing page
                    header("location: ../view/user_login.php");
                    exit();
                } else{
                    echo "Something went wrong. Please try again later.";
                }
            }
            // Close statement
            unset($stmt);
        }
    }

    $query_role = "SELECT * FROM role";
    if($stmt_role = $pdo->prepare($query_role)){
        $stmt_role->execute();
    }


?>