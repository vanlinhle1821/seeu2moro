<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> FORM THÊM KHÁCH HÀNG</title>
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
</div>

	<?php
include_once('../khachhang/connect.php');
?>

	<form action="themkhachhang.php" method="POST" name="fdichvu">
   <center>
   	   <table>
        <h2>THÊM THÔNG TIN KHÁCH HÀNG</h2>
            <tr>
              <td>
                Mã khách hàng
              </td>
              <td><input type="text" name="txtmakh"></td>
            </tr>
            <tr>
              <td>
                Tên khách hàng
              </td>
              <td><input type="text" name="txthoten" ></td>
            </tr>
            <tr>
              <td>
                Email
              </td>
              <td><input type="text" name="txtemail" ></td>
            </tr>
            <tr>
              <td>
                Điện thoại
              </td>
              <td><input type="text" name="txtdienthoai" ></td>
            </tr>
            <tr>
              <td>
                Giới tính
              </td>
              <td><input type="text" name="txtgioitinh" ></td>
            </tr>
            <tr>
              <td>
                Ngày sinh
              </td>
              <td><input type="text" name="txtngaysinh" ></td>
            </tr>
            <tr>
              <td>
                Địa chỉ
              </td>
              <td><input type="text" name="txtdiachi"></td>
            </tr>
            <tr>
              <td colspan="2" align="center"><input type="submit" value="Lưu thông tin"></td>
            </tr>
       </table>
   </center>
    </form>
</body>
</html>