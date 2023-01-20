<?php include('server.php'); ?>   

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <br>
    <br>
    <br>
    <br>
    <title>เข้าสู่ระบบ</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="style-login.css">  
    <br>
    <br>
    <br>
    <P Align=center><caption><font color="#00000" size="60px" face="TH SARABUN PSK"><b>เข้าสู่ระบบ</font></caption>
    <link href="login.css" rel="stylesheet">
  </head>
  <br>
  <br>
  <br>
  <body class="text-center">
    <main class="form-signin">
      <form onsubmit="return login()">

        <div class="form-floating">
        <P Align=center><input type="username" type="email"  class="form-control" id="username" placeholder="กรุณากรอกชื่อผู้ใช้" style="width: 600px;" >
        </div>
        <br>
        <div class="form-floating">
            <P Align=center><input type="password" class="form-control" id="password" placeholder="กรุณากรอกรหัสผ่าน" style="width: 600px;" >
        </div>

    
        <label>
            <P Align="cellpadding"> <input type="checkbox" name="checkbox" value="1"> จดจำฉันไว้ในระบบ </label>
         </p>
        <button class="w-40 btn btn-lg btn-primary mt-3" type="submit">เข้าสู่ระบบ</button>
        <br>
        <br>
      

        <a href="mailto:miewpwn@gmail.com"><u>ลืมรหัสผ่าน</u></a>
    <br>
    <br>

  
    <input type="button" value="สมัครเพื่อเข้าสู่ระบบ" onclick="javascript:window.location='signin.php';">
    <br>
       
   
      </form>
    </main>

    <script src="login.js"></script>    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>