<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>THÊM LOẠI DỊCH VỤ</title>
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
include_once('../loaidv/connect.php');
?>

	<form action="themldichvu.php" method="POST" name="fldichvu">
   <center>
   	   <table>
   	   	<h2>FORM THÊM LOẠI DỊCH VỤ</h2>
   	   	    <tr>
   	   	    	<td>
   	   	    		Mã loại dịch vụ
   	   	    	</td>
   	   	    	<td><input type="text" name="txtmaloaidv"></td>
   	   	    </tr>
   	   	    <tr>
   	   	    	<td>
   	   	    		Tên loại dịch vụ
   	   	    	</td>
   	   	    	<td><input type="text" name="txttenloaidv"></td>
   	   	    </tr>
   	   	    <tr>
              <td>
                Mã dịch vụ
              </td>
              <td><input type="text" name="txtmadv"></td>
            </tr>
   	   	    <tr>
   	   	    	<td align="center"><input type="submit" value="Thêm"></td>
                <td align="center"><button><a href="loaidichvu.php">Trang dịch vụ</a></button></td>
   	   	    </tr>
   	   </table>
   </center>
    </form>
</body>
</html>