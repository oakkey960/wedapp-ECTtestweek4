<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 align="center">Webboard KUKU</h1>
    <hr>
    <div align="center">
        ตองการดูกระทู้หมายเลข <?php echo $_GET["id"];?>
        <br>
        <?php
        $n = $_GET["id"];
        if (($n % 2) == 0)
        echo "เป็นกระทู้หมายเลขคู่";
        else
        echo "เป็นกระทู้หมายเลขคี่";
        ?>
        <br>
        <table style="width: 20%; border: 1px solid black">
  <tr><td style="background-color: #D6EEEE">แสดงความคิดเห็น</td></tr>
  <tr><td><textarea></textarea></td></tr>
  <tr><td colspan="2" align="center"><input type="submit" name="text" value="ส่งข้อความ"></td></tr>
</table>
<a href="index.php">กลับไปหน้าหลัก</a>
</div>
</body>
</html>