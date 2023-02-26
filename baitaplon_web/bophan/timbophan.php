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
include_once('../bophan/connect.php');
// Hành động => đọc dữ liệu từ CSDL (bảng khoa)=> trình bày
$madv=$_POST['txtkey'];
$sql_select="SELECT * FROM t_bophan WHERE mabp='".$mabp."'";
$resutl=$conn->query($sql_select); // Thực hiện
// Để đọc dữ liệu => vòng lặp => while => mảng
// Trình bày dữ liệu trong Table
echo "<center>";
	echo "<H2>DANH SÁCH BỘ PHẬN</h2>";
	echo "<form action='timbophan.php' method='POST'>";
		echo "<input type='text' name='txtkey' required><input type='submit' value='Tìm Kiếm'>";
	echo "</form>";
		echo "<table border='1'>";
		echo "<tr>";
			echo "<td align = 'center'><b>STT</b></td>";
			echo "<td align = 'center'><b>Mã bộ phận</b></td>";
			echo "<td align = 'center'><b>Tên bộ phận</b></td>";
			echo "<td align = 'center' colspan = '2'><a href ='../bophan/formthem.php'>ADD</a></td>";

		echo "</tr>";
		$i=0;
		while ($row=$resutl->fetch_assoc()){
		$i = $i + 1;
		$mabpxoa= $row['mabp'];
		echo "<tr>";
			echo "<td>".$i."<br>";
			echo "<td>".$row['mabp']."<br>";
			echo "<td>".$row['tenbp']."<br>";
			echo "<td align = 'center'><a href ='../bophan/formsua.php?mabp=$mabpxoa'>Edit</a></td>";
         echo "<td align = 'center'><a href ='xoabophan.php?mabp=$mabpxoa'>Del</a></td>";
			}
		echo "</tr>";
	echo "</table>";
echo "</center>";
// Đóng kết nối
?>
</body>
</html>