<?php
    session_start();
?>
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
    <div style="float:left">
    ผู้ใช้ : <?php echo$_SESSION['username'] ?>
    <br>
    <br>
        หมวดหมู่ :
    <select name="cars" id="cars">
    <option value="1">เนื้อหาทั่วไป</option>
    <option value="2">เนื้อหาทั่วไป</option>
    <option value="3">เนื้อหาทั่วไป</option>
    <option value="4">เนื้อหาทั่วไป</option>
  </select>
  <br>
  <br>
        หัวข้อ : <input type="text"><br>
        <br>
  เนื้อหา : <textarea></textarea>
  <br>
  <td colspan="2" align="center"><input type="submit" name="text" value="บันทึกข้อความ"></td>
</div>
</body>
</html>