<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login/register</title>
    <link rel="stylesheet" href="style.css">
    <script src="func.js"></script>
</head>
<body>
    <div class = "container"> 
<div class="select_opt">
       <button onclick="stdForm()">นักเรียน</button>
       <button onclick="teaForm()">ครู</button>
       <button onclick="reForm()">สมัครสมาชิก</button>
</div>
<div class="form-1 unhide" id="stdForm">
    <p>ฟรอมลงชื่อเข้าใช้ของนักเรียน</p>
    <form action="auth.php" method="get">
        <input type="text" name="username" placeholder="ชื่อผู้ใช้นักเรียน id ">
        <br>
        <input type="password" name="password" placeholder="รหัสผ่าน id ">
        <br>
        <input type="submit" value="ลงชื่อเข้าใช้">

    </form>
</div>
<div class="form-2 hide" id="teaForm">
    <p>ฟรอมลงชื่อเข้าใช้ของครู</p>
    <form action="auth.php" method="get">
        <input type="text" name="username" placeholder="ชื่อผู้ใช้ครู id ">
        <br>
        <input type="password" name="password" placeholder="รหัสผ่านครู id ">
        <br>
        <input type="submit" value="ลงชื่อเข้าใช้">

    </form>
</div>
<div class="form-3 hide" id="regForm">
    <p>ฟรอมสมัครสมาชิก</p>
    <!--1.ชื่อ-นามสกุล
    2.เพศ
    3.อายุ
    4.username
    5.password
    6.re_password -->

    <form action="singup.php" method="get">
        <input type="text" name="fullname"placeholder="ชื่อ-สกุล ">
        <br>
        <input type="radio" name="gender" value="ชาย">=ชาย
        <input type="radio" name="gender" value="หญิง">=หญิง
        <br>
        <input type="number" name="age" min="1" max="100" placeholder="อายุ">
        <br>
        <input type="text" name="username" placeholder="ชื่อผู้ใช้ "">
        <br>
        <input type="password" name="password" placeholder="รหัสผ่าน ">
        <br>
        <input type="password" name="re_password" placeholder="ยืนยันรหัสผ่าน ">
        
        <br>
        <input type="submit" value="ลงชื่อเข้าใช้">

    </form>
</div>
    </div>
</body>
</html>