<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login Tugas 4 PHP Merry</title>
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
    <table>
    <thead>
        <tr>
            <h2 align="center">Form Login</h2>
        </tr>
    </thead>
    <tbody>
        <form action="admin.php" method="POST">
            <tr>
                <td>Username :</td>
                <td>
                <input type="text" name="username" id="" require>
                </td>
            </tr>
            <br>
            <tr>
                <td>Password :</td>
                <td>
                <input type="password" name="password" id="" require>
                </td>
            </tr>
        <tfoot>
            <tr>
                <th><button name="login">Login</button></th>
            </tr>
        </tfoot>
        </form>
    </tbody>
</table>
</body>
</html>

<?php 
   
    function cekLogin($username, $password) {
        if($username === "admin" && $password === "mimin"){
            header("Location: admin.php");
            exit();
        }else{
            echo "Username dan Password Anda Tidak Valid";
        }
    }

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        cekLogin($username, $password);
    }else {
        echo "Silakan masukkan nama pengguna dan kata sandi.";
    }
?>
