<?php
  $query = "SELECT * FROM thing_group ORDER BY gr_id ASC" or die("Error: " .
  mysqli_error());
  $result = mysqli_query($conn, $query);
?>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a id="logo" href="index.php"><img alt="Logo" src="image/logo.png" width="40"/></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">หน้าแรก<span class="sr-only">(current)</span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          หมวดหมู่ <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="swap_things_list.php">แลกเปลี่ยน</a></li>
            <li><a href="donate_things_list.php">บริจาค</a></li>
            <li><a href="#">ซื้อ-ขาย</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">ค้นหา</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">ติดต่อเรา</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          เมนู<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="register.php">สมัครสมาชิก</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">เข้าสู่ระบบ</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>