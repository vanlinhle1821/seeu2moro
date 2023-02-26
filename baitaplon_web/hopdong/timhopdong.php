<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tìm kiếm</title>
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
include_once('../hopdong/connect.php');
// Hành động => đọc dữ liệu từ CSDL (bảng khoa)=> trình bày
$madv=$_POST['txtkey'];
$sql_select="SELECT * FROM t_hopdong WHERE mahd='".$mahd."'";
$resutl=$conn->query($sql_select); 
echo "<center>";
	echo "<H2>DANH SÁCH HỢP ĐỒNG</h2>";
	echo "<form action='timhopdong.php' method='POST'>";
		echo "<input type='text' name='txtkey' required><input type='submit' value='Tìm Kiếm'>";
	echo "</form>";
		echo "<table border='1'>";
		echo "<tr>";
			echo "<td align = 'center'><b>STT</b></td>";
      echo "<td align = 'center'><b>Mã hợp đồng</b></td>";
      echo "<td align = 'center'><b>Mã khách hàng</b></td>";
      echo "<td align = 'center'><b>Mã dịch vụ</b></td>";
      echo "<td align = 'center'><b>Ngày thuê</b></td>";
      echo "<td align = 'center'><b>Ngày hết hạn</b></td>";
      echo "<td align = 'center'><b>Giá</b></td>";
      echo "<td align = 'center'><b>Mã nhân viên</b></td>";
      echo "<td align = 'center' colspan = '2'><a href ='../hopdong/formthem.php'>ADD</a></td>";

		echo "</tr>";
		$i=0;
		while ($row=$resutl->fetch_assoc()){
		$i = $i + 1;
		$mahdxoa= $row['mahd'];
		echo "<tr>";
			echo "<td>".$i."<br>";
      echo "<td>".$row['mahd']."<br>";
      echo "<td>".$row['makh']."<br>";
      echo "<td>".$row['madv']."<br>";
      echo "<td>".$row['ngaythue']."<br>";
      echo "<td>".$row['ngayhethan']."<br>";
      echo "<td>".$row['gia']."<br>";
      echo "<td>".$row['manv']."<br>";
      echo "<td align = 'center'><a href ='formsua.php?madv=$mahdxoa'>Edit</a></td>";
      echo "<td align = 'center'><a href ='xoahopdong.php?madv=$mahdxoa'>Del</a></td>";
			}
		echo "</tr>";
	echo "</table>";
echo "</center>";
// Đóng kết nối
?>
</body>
</html>