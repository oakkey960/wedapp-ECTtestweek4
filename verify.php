<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>verify</title>
</head>
<body>
    <h1 align="center">Webboard KUKU</h1>
    <hr>
    <div align="center">
        <?php
        if($_POST ["login"] == "admin" && $_POST["pwd"] == "ad1234"){
            echo "ยินดีต้อนรับ ADMIN";
        }
        elseif($_POST ["login"] == "member" && $_POST["pwd"] == "mem1234"){
            echo "ยินดีต้อนรับ MEMBER";
        }
        else
        echo "ชื่อบัณชีหรือรหัสผ่านไม่ถูกต้อง"
        ?>
        <br>
        <a href="index.php">กลับไปหน้าหลัก</a>
    </div>
    </body>
</html>