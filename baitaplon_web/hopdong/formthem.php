<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>THÊM DỊCH VỤ</title>
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
include_once('../hopdong/connect.php');
?>

	<form action="themhopdong.php" method="POST" name="fhopdong">
   <center>
   	   <table>
   	   	<h2>FORM THÊM HỢP ĐỒNG</h2>
   	   	    <tr>
   	   	    	<td>
   	   	    		Mã hợp đồng
   	   	    	</td>
   	   	    	<td><input type="text" name="txtmahd" ></td>
   	   	    </tr>
   	   	    <tr>
   	   	    	<td>
   	   	    		Mã khách hàng
   	   	    	</td>
   	   	    	<td><input type="text" name="txtmakh"></td>
   	   	    </tr>
   	   	    <tr>
              <td>
                Mã dịch vụ
              </td>
              <td><input type="text" name="txtmadv"></td>
            </tr>
   	   	    <tr>
   	   	    	<td>
   	   	    		Ngày thuê
   	   	    	</td>
   	   	    	<td><input type="date" name="txtngaythue"></td>
   	   	    </tr>
            <tr>
              <td>
                Ngày hết hạn
              </td>
              <td><input type="date" name="txtngayhethan"></td>
            </tr>
            <tr>
              <td>
                Giá
              </td>
              <td><input type="text" name="txtgia"></td>
            </tr>
            <tr>
              <td>
                Mã nhân viên
              </td>
              <td><input type="text" name="txtmanv"></td>
            </tr>
   	   	    <tr>
   	   	    	<td align="center"><input type="submit" value="Thêm"></td>
                <td align="center"><button><a href="hopdong.php">Trang hợp đồng</a></button></td>
   	   	    </tr>
   	   </table>
   </center>
    </form>
</body>
</html>