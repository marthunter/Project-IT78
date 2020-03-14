<?php   
    include('condb.php');
    include('header.php');
    include('menu.php');
?>
<?php
// query ข้อมูลจากตาราง:
$query = "SELECT * FROM users" or die("Error:" . mysqli_error());
//เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
$result = mysqli_query($conn, $query);
?>
<h3 id="textaddthing">สมัครสมาชิก</h3>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

input[type=text],input[type=email],input[type=password], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
  margin-right: 2%;
}

input[type=button] {
  background-color: #dc3546;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

input[type=button]:hover {
  background-color: #c82333
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit], input[type=button], input[type=file]  {
    width: 100%;
    margin-top: 5px;
    margin-right: 0%;
  }
}

@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=button]  {
    width: 100%;
    margin-top: 10px;
    margin-right: 0%;
  }
}
</style>
</head>
<body>

<div class="container">
  <form method="POST" action="form_add_user_db.php" enctype="multipart/form-data">
    <div class="row">
      <div class="col-25">
        <label for="fname">ชื่อจริง : </label>
      </div>
      <div class="col-75">
        <input type="text" id="firstname" name="firstname" placeholder="ชื่อจริง" require autofocus>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">นามสกุล : </label>
      </div>
      <div class="col-75">
        <input type="text" id="lastname" name="lastname" placeholder="นามสกุล" require>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">เบอร์โทรศัพท์ : </label>
      </div>
      <div class="col-75">
        <input type="text" id="telephone" name="telephone" placeholder="เบอร์โทรศัพท์" require>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">ที่อยู่ : </label>
      </div>
      <div class="col-75">
        <textarea id="address" name="address" placeholder="ที่อยู่ผู้ใช้งาน....." style="height:200px" require></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">รหัสไปรษณีย์ : </label>
      </div>
      <div class="col-75">
        <input type="text" id="postcode" name="postcode" maxlength="5" placeholder="รหัสไปรษณีย์" require>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">E-mail : </label>
      </div>
      <div class="col-75">
        <input type="email" id="email" name="email" placeholder="E-mail" require>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Username : </label>
      </div>
      <div class="col-75">
        <input type="text" id="username" name="username" placeholder="4 - 15 ตัวอักษร" minlength="4" maxlength="15" require>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Password : </label>
      </div>
      <div class="col-75">
        <input type="password" id="password" name="password" placeholder="Password"  require>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">รูปประจำตัว : </label>
      </div>
      <div class="col-75">
        <input type="file" name="imageprofile" id="imageprofile" accept="image/*">
      </div>
    </div>
    <div class="row">
    <a href="index.php"><input type="button" value="ย้อนกลับ"></a>
      <input type="submit" value="สมัครสมาชิก">
    </div>
  </form>
</div>
</body>
</html>



