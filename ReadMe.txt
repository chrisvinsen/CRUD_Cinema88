Panduan Cara Kerja Project U-Cinema
By Christianto Vinsen B. - 00000028917
Class = Web Programming DL

Hosting Website : cinema88.000webhostapp.com

1. Pertama kali masuk ke website U-Cinema, akan langsung di direct ke halaman login.php (Jika kita belum login, maka kita tidak dapat pindah ke page manapun)
2. Jika user sudah mempunyai akun U-Cinema, kita dapat langsung login dengan memasukkan email dan password.
3. Jika user belum mempunyai akun U-Cinema, maka user dapat klik "Register" pada page login, dan akan langsung di pindahkan ke page Register, Register membutuhkan data:
   - Email (Wajib email yang valid: mengandung '@' dan '.'
   - Role (Admin, Manajer, dan Kasir).
   - Password (Minimal harus 8 huruf)
4. Seteleh berhasil mendaftar, maka user langsung diarahkan ke page "Login" dan dapat langsung login setelah memasukkan autentifikasi user nya.
5. Setelah berhasil Login, user akan diarakan ke page index atau home, dimana di page ini berisi daftar film yang terdaftar di U-Cinema, dengan tampilan data berupa: no, title, genre, release date, countdown(countdown waktu rilis dengan waktu hari ini, jika waktu rilis < waktu hari ini, maka akan menampilkan waktu dengan format 'ago', jika sebaliknya maka akan menampilkan waktu dengan format 'more')
   Jika kita melakukan 'hover' pada data tabel tersebut, maka akan muncul poster dari data movie tersebut.
6. Pada kolom di daftar tabel tersebut, terdapat "View More" pada setiap film, dimana jika di klik akan mengarahkan user ke page "Film Details",  di page tersebut terdapat tab "Details", "Synopsis", "Edit", dan "Delete" Movies, tergantung pada role user tersebut:
   - Kasir -> Terdapat tab "Details", dan "Synopsis"
   - Manajer -> Terdapat tab "Details", "Synopsis", dan "Delete Movies"
   - Admin -> Terdapat tab "Details", "Synopsis", "Delete Movies", dan "Edit Movies"
7. Penghapusan film dapat dilakukan dengan klik "Delete Movies" di menu tersebut.
8. Pengubahan (edit) film dapat dilakukan dengan klik "Edit Movies" di menu tersebut.
9. Jika role user adalah 'admin', maka user dapat menambahkan film baru di bagian kanan atas page index atau home, lalu user akan dipindahkan langsung ke page untuk menambah movie baru, dimana membutuhkan data wajib berupa:
   - Title
   - Poster (Akan ada preview poster setelah poster dimasukkan)
   - Genre (Terdapat 12 pilihan, user dapat memilih lebih dari 1)
   - Release Date (Tanggal rilis film, tanggal ini tidak boleh kurang dari tanggal sekarang / tanggal menambahkan film)
   - Duration (Format 0h 0m)
   - Synopsis
   Setelah sukses mendaftarkan film, akan ada notifikasi bahwa film sudah berhasil ditambahkan. Dan juga terdapat validasi text merah jika field film gagal di daftarkan. 
10. Di bagian kiri semua page, terdapat navigasi yang menunjukkan "nama", "email", lalu tab "Home" untuk menuju page index atau home, tab "Coder's Profile" untuk menuju page profile pembuat website, dan tab "Sign out" yang akan mengarahkan user ke page "Logout" dan keluar dari website dan menghapus semua SESSION yang ada.