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
    <title>Register</title>
</head>
<body>
    <h1 style="text-align: center;">สมัครสมาชิก</h1>
    <hr>    
    <table align="center" style="width: 40%; border: 2px solid black;">
    <tr><td colspan="2" style="background-color: #6CD2FE;">กรอกข้อมูล</td></tr>
    <tr><td>ชื่อบัญชี :</td><td><input type="text" name="username" size="70"></td></tr>
    <tr><td>รหัสผ่าน :</td><td><input type="password" name="pwd" size="70"></td></tr>
    <tr><td>ชื่อ-นามสกุล :</td><td><input type="text" name="name" size="70"></td></tr>

    <tr><td rowspan="3">เพศ :</td><td><input type="radio" name="gender" value="male">ชาย</td></tr>
    <tr><td><input type="radio" name="gender" value="female">หญิง</td></tr>
    <tr><td><input type="radio" name="gender" value="other">อื่นๆ</td></tr>

    
    <tr><td>อีเมล :</td><td><input type="text" name="email" size="70"></td></tr>
    <tr><td colspan="2" align="center"><input type="submit" name="submit" value="สมัครสมาชิก"></td></tr>
    </tr>
    </table>
    <br>
    <p style="text-align: center;"><a href="index.php">กลับสู่หน้าหลัก</a></p>
</body>
</html>