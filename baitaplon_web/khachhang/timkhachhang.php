<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Tìm kiếm</title>
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
   //Kết nối 
include_once('../khachhang/connect.php');
// Hành động => đọc dữ liệu từ CSDL (bảng khoa)=> trình bày
$madv=$_POST['txtkey'];
$sql_select="SELECT * FROM t_kh WHERE makh='".$makh."'";
$resutl=$conn->query($sql_select); // Thực hiện
// Để đọc dữ liệu => vòng lặp => while => mảng
// Trình bày dữ liệu trong Table
echo "<center>";
	echo "<H2>DANH SÁCH KHÁCH HÀNG</h2>";
	echo "<form action='timkhachhang.php' method='POST'>";
		echo "<input type='text' name='txtkey' required><input type='submit' value='Tìm Kiếm'>";
	echo "</form>";
		echo "<table border='1'>";
		echo "<tr>";
			echo "<td align = 'center'><b>STT</b></td>";
      echo "<td align = 'center'><b>Mã khách hàng</b></td>";
      echo "<td align = 'center'><b>Tên khách hàng</b></td>";
      echo "<td align = 'center'><b>Email</b></td>";
      echo "<td align = 'center'><b>Điện thoại</b></td>";
      echo "<td align = 'center'><b>Giới tính</b></td>";
      echo "<td align = 'center'><b>Ngày sinh</b></td>";
      echo "<td align = 'center'><b>Địa chỉ</b></td>";
      echo "<td align = 'center' colspan = '2'><a href ='../khachhang/formthem.php'>ADD</a></td>";

    echo "</tr>";
    $i=0;
    while ($row=$resutl->fetch_assoc()){
    $i = $i + 1;
    $makhxoa= $row['makh'];
    echo "<tr>";
      echo "<td>".$i."<br>";
      echo "<td>".$row['makh']."<br>";
      echo "<td>".$row['hoten']."<br>";
      echo "<td>".$row['email']."<br>";
      echo "<td>".$row['dienthoai']."<br>";
      echo "<td>".$row['gioitinh']."<br>";
      echo "<td>".$row['ngaysinh']."<br>";
      echo "<td>".$row['diachi']."<br>";
      echo "<td align = 'center'><a href ='formsua.php?makh=$makhxoa'>Edit</a></td>";
      echo "<td align = 'center'><a href ='xoakhachhang.php?makh=$makhxoa'>Del</a></td>";
    }
    echo "</tr>";
  echo "</table>";
echo "</center>";
// Đóng kết nối
?>
</body>
</html>