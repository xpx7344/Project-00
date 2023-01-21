<?php include('server.php'); ?>    

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>สมัครเข้าสู่ระบบ</title>
 

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
 
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
 
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
 <!-- <link rel="stylesheet" href="style-register.css"> --> 
</head>

  <body>

    <form action="register_db.php" method="post">
        <?php include('errors.php'); ?>
        <?php if (isset($_SESSION['error'])) : ?>
            <div class="error">
                <h3>
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
        
    <center>
        <div class="container">
        <div class="row">
        <div class="col-md-12">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <h1 align="center">สมัครเข้าสู่ระบบ </h1>
        <form action="" method="POST" name="register"  id="register">
        <table width="70%" border="0" align="center" cellpadding="0" cellspacing="0">
        
          <tr>
            <td align="right"> ชื่อจริง : &nbsp;</td>  <br>
            <td colspan="2">
            <input name="Fname" type="text" id="Fname"  class="form-control" placeholder="กรุณากรอกเป็นภาษาไทยเท่านั้น" required></td>
            <td>&nbsp;</td>
          </tr>
    
          <tr>
            <td align="right"> นามสกุล : &nbsp;</td>
            <td colspan="2">
            <input name="Lname" type="text" id="Lname" size="50" class="form-control" placeholder="กรุณากรอกเป็นภาษาไทยเท่านั้น" required></td>
            <td>&nbsp;</td>
          </tr>


          <tr>
            <td align="right"> อีเมล์ :&nbsp; </td>
            <td><input name="Email" type="email" id="Email" class="form-control" placeholder="เช่น abc@gmail.com " required></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>

          <tr>
            <td align="right">เบอร์โทรศัพท์ : &nbsp; </td>
            <td><input name="Phone" type="text" id="Phone" class="form-control" placeholder="เช่น 099 999 9999" required></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>

          <tr>
            <td align="right">วัน/เดือน/ปีเกิด  : &nbsp; </td>
            <td><input name="bday" type="date" id="bday" class="form-control"  required></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
      
          <tr>
            <td align="right"> ที่อยู่บ้านเลขที่ : &nbsp;</td>
            <td colspan="1.7">
            <input name="Fname" type="text" id="Fname"  class="form-control" placeholder="กรุณากรอกบ้านเลขที่" required>
            <td align="right"> ซอย : &nbsp;</td>
            <td><td colspan="1.7"><td>
            <input name="address" type="text" id="address" size="50" class="form-control" placeholder="กรุณากรอกซอย" required>
            <td>&nbsp;</td>
          </tr>
        
          <tr>
          <td align="right"> แขวง/ตำบล : &nbsp;</td>
            <td colspan="1.5">
            <input name="address" type="text" id="address" size="50" class="form-control" placeholder="กรุณากรอกแขวง/ตำบล"  required>
            <td align="right"> เขต/อำเภอ : &nbsp;</td>
            <td><td colspan="1.7"><td>
            <input name="address" type="text" id="address" size="50" class="form-control" placeholder="กรุณากรอกเขต/อำเภอ"  required>
          </tr>
        
          <tr>
            <td align="right"> จังหวัด : &nbsp;</td>
            <td colspan="1.7">
            <select name="province" id="province" class="form-control" placeholder="กรุณากรอกจังหวัด"  required>
            <option value="" selected> กรุณาเลือกจังหวัด </option>
              <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
              <option value="กระบี่">กระบี่ </option>
              <option value="กาญจนบุรี">กาญจนบุรี </option>
              <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
              <option value="กำแพงเพชร">กำแพงเพชร </option>
              <option value="ขอนแก่น">ขอนแก่น</option>
              <option value="จันทบุรี">จันทบุรี</option>
              <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
              <option value="ชัยนาท">ชัยนาท </option>
              <option value="ชัยภูมิ">ชัยภูมิ </option>
              <option value="ชุมพร">ชุมพร </option>
              <option value="ชลบุรี">ชลบุรี </option>
              <option value="เชียงใหม่">เชียงใหม่ </option>
              <option value="เชียงราย">เชียงราย </option>
              <option value="ตรัง">ตรัง </option>
              <option value="ตราด">ตราด </option>
              <option value="ตาก">ตาก </option>
              <option value="นครนายก">นครนายก </option>
              <option value="นครปฐม">นครปฐม </option>
              <option value="นครพนม">นครพนม </option>
              <option value="นครราชสีมา">นครราชสีมา </option>
              <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
              <option value="นครสวรรค์">นครสวรรค์ </option>
              <option value="นราธิวาส">นราธิวาส </option>
              <option value="น่าน">น่าน </option>
              <option value="นนทบุรี">นนทบุรี </option>
              <option value="บึงกาฬ">บึงกาฬ</option>
              <option value="บุรีรัมย์">บุรีรัมย์</option>
              <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
              <option value="ปทุมธานี">ปทุมธานี </option>
              <option value="ปราจีนบุรี">ปราจีนบุรี </option>
              <option value="ปัตตานี">ปัตตานี </option>
              <option value="พะเยา">พะเยา </option>
              <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
              <option value="พังงา">พังงา </option>
              <option value="พิจิตร">พิจิตร </option>
              <option value="พิษณุโลก">พิษณุโลก </option>
              <option value="เพชรบุรี">เพชรบุรี </option>
              <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
              <option value="แพร่">แพร่ </option>
              <option value="พัทลุง">พัทลุง </option>
              <option value="ภูเก็ต">ภูเก็ต </option>
              <option value="มหาสารคาม">มหาสารคาม </option>
              <option value="มุกดาหาร">มุกดาหาร </option>
              <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
              <option value="ยโสธร">ยโสธร </option>
              <option value="ยะลา">ยะลา </option>
              <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
              <option value="ระนอง">ระนอง </option>
              <option value="ระยอง">ระยอง </option>
              <option value="ราชบุรี">ราชบุรี</option>
              <option value="ลพบุรี">ลพบุรี </option>
              <option value="ลำปาง">ลำปาง </option>
              <option value="ลำพูน">ลำพูน </option>
              <option value="เลย">เลย </option>
              <option value="ศรีสะเกษ">ศรีสะเกษ</option>
              <option value="สกลนคร">สกลนคร</option>
              <option value="สงขลา">สงขลา </option>
              <option value="สมุทรสาคร">สมุทรสาคร </option>
              <option value="สมุทรปราการ">สมุทรปราการ </option>
              <option value="สมุทรสงคราม">สมุทรสงคราม </option>
              <option value="สระแก้ว">สระแก้ว </option>
              <option value="สระบุรี">สระบุรี </option>
              <option value="สิงห์บุรี">สิงห์บุรี </option>
              <option value="สุโขทัย">สุโขทัย </option>
              <option value="สุพรรณบุรี">สุพรรณบุรี </option>
              <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
              <option value="สุรินทร์">สุรินทร์ </option>
              <option value="สตูล">สตูล </option>
              <option value="หนองคาย">หนองคาย </option>
              <option value="หนองบัวลำภู">หนองบัวลำภู </option>
              <option value="อำนาจเจริญ">อำนาจเจริญ </option>
              <option value="อุดรธานี">อุดรธานี </option>
              <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
              <option value="อุทัยธานี">อุทัยธานี </option>
              <option value="อุบลราชธานี">อุบลราชธานี</option>
              <option value="อ่างทอง">อ่างทอง </option>
              <option value="อื่นๆ">อื่นๆ</option> 
              <id="province" class="form-control" placeholder="กรุณากรอกจังหวัด"  required>
        </select>
     
              <td align="right"> รหัสไปรษณีย์: &nbsp;</td>
              <td><td colspan="1.7"><td>
            <select name="postcode" type="number" id="postcode" class="form-control" placeholder="กรุณากรอกรหัสไปรษณีย์" required></select>
            <td>&nbsp;</td>
          </tr>
         
          <tr>
            <td width="18%" align="right"> ชื่อผู้ใช้ : &nbsp;</td>
            <td width="31%"><input name="Username" type="text" id="Username" class="form-control" placeholder="กรุณากรอกเป็นภาษาอังกฤษหรือตัวเลขเท่านั้น" required> <span id="msg2"></span> </td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
         
          <tr>
            <td align="right"> รหัสผ่าน : &nbsp;</td>
            <td><input name="Password" type="password" id="Password" class="form-control" placeholder="อย่างน้อย 8 ตัว"  required></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          
          <tr>
            <td align="right"> ยืนยันรหัสผ่าน&nbsp; </td>
            <td>
            <input name="Password2" type="password" id="Password2" placeholder="กรุณายืนยันรหัสผ่าน " class="form-control"  required >        
            </td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          
          <tr>
            <td align="center">&nbsp;</td>
            <td colspan="3" align="center">
            </td>
          </tr>
          
          <tr>
            <td align="center">&nbsp;</td>
            <td colspan="3" align="left">
            <input type="submit" name="regis" id="regis" class="btn btn-info btn-sm" value="สมัครสมาชิก" >
            </td>
          </tr>
          
        </table>
      </form>
      </div>
    </div>
  </div>
 </center>
</form>
<!--start footer-->      

<!--end footer-->
 
 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
  </body>
</html>