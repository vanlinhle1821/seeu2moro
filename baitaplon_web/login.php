<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="css.css">
  </head>
  <body>

<div class="topnav">
  <a class="active" href="../trangchu.php">Trang chủ</a>
  <a href="../dichvu/dichvu.php">Dịch vụ</a>
  <a href="../loaidv/loaidichvu.php">Loại dịch vụ</a>
  <a href="../khachhang/khachhang.php">Khách hàng</a>
  <a href="../hopdong/hopdong.php">Hợp đồng</a>
  <a href="../bophan/bophan.php">Bộ phận</a>
  <a href="../nhanvien/nhanvien.php">Nhân viên</a>
  <a href="../tuyendung.php">Tuyển dụng</a>
  <a href="../lienhe.php">Liên hệ</a>
  <a href="../about.php">Về chúng tôi</a>
  <a class="fa fa-shield" style="font-size:48px;color:white"></a>
</div>
<div class="header">
  <img src="../img/logo.png">
  <img src="../img/baove1.jpg">
</div>
<?php
 //Kết nối 
    include_once('../baitaplon_web/connect.php');
  ?>
    <script type="text/javascript">
        function checkdangnhap() {
          // Lấy dữ liệu trên form
          var user=document.flogin.txtname.value;
          var pass=document.flogin.txtpass.value;
            if(user=="")
            {
              alert("Bạn chưa nhập tên");
              return false;
            }
            else if (pass=="") {
              alert("Bạn chưa nhập mật khẩu");
              document.flogin.txtpass.forcus();
              return false;
            }else if (user=="admin" || pass=="admin") {
              alert("Đăng nhập thành công");
              window.location.href = "../baitaplon_web/trangchu.php";
              return false;
            }else {
              alert("Sai tên đăng nhập hoặc mật khẩu");
              return false;
            } 
        }
    </script>
      <center>
  <h2>ĐĂNG NHẬP HỆ THỐNG</h2>
  <form name="flogin" method="post" action="" onsubmit="return checkdangnhap()">
     <table border="0">
<img src="../img/icon-login-3.jpg" width="5%" align="center">
      </tr>
      <tr>
        <td class="text">Tên đăng nhập</td>
        <td><input type="text" name="txtname" id="txtname" class="text"></td>
      </tr>
      <tr>
        <td class="text">Mật khẩu</td>
        <td><input type="password" name="txtpass" class="text"></td>
      </tr>
      <tr>
        <td colspan="3" align="center">
        <input type="Submit" name="Submit" value="Đăng nhập" class="button">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="Reset" value="Nhập lại" class="button">
      </td>
      </tr>
     </table>
  </form>
      </center>
<div style="background-color: #04AA6D; text-align: center;">
  <p class="p" style="padding-left: 10px;color: white;">Trụ sở chính: Phú Diễn - Cầu Diễn - Bắc Từ Liêm - Hà Nội</p>
  <p class="p" style="padding-left: 20px;color: white;">Hotline : 0972526974</p>
  <p class="p" style="padding-left: 20px;color: white;">Email:DMTU@gmail.com</p>
</div>
  </body>
</html>
