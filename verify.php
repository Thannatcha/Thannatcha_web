<?php
session_start();
if(isset($_SESSION['id'])){
    header("location:index.php");
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>verify</title>
</head>
<body>
    <h1 style="text-align: center;">Webboard Thannatcha</h1>
    <hr>
    <div style="text-align: center;"> 
    <?php 
        $login = $_POST["login"];  
        $password = $_POST["password"];
        if($login == "admin" && $password=="ad1234"){
            $_SESSION['username']='admin';
            $_SESSION['role']='a';
            $_SESSION['id']=session_id();
            echo "ยินดีต้อนรับคุณ ADMIN <br>" ; 
            echo"<a href=index.php>กลับไปหน้าหลัก</a>";
        }elseif($login=="member" && $password=="mem1234"){
            $_SESSION['username']='member';
            $_SESSION['role']='m';
            $_SESSION['id']=session_id();
            echo "ยินดีต้อนรับคุณ MEMBER <br>";
            echo"<a href=index.php>กลับไปหน้าหลัก</a>";
        }else{
            echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง <br>" ; 
            echo"<a href=index.php>กลับไปหน้าหลัก</a>";
        }                                                    
        /*echo"เข้าสู่ระบบด้วย <br>";
        echo"Login =  $_POST[login] <br>";
        echo"Password =  $_POST[password] <br>";
        */
    ?>

</div>
</body>
</html>