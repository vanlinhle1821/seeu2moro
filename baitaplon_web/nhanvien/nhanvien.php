<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nhân viên</title>
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
    include_once('../nhanvien/connect.php');
  ?>
      <center>
   <h2>DANH SÁCH NHÂN VIÊN</h2><br>
  <form action='' method='POST'>
  <input type='text' name='txtkey'><input type='submit' value='Tìm Kiếm'>
  <input type="button" value="Refresh" onclick="window.location.href ='http://localhost/baitaplon_web/nhanvien/nhanvien.php'">
  </form> <br>
  <?php
   if(isset($_POST['txtkey'])&& !empty($_POST['txtkey']))
   {
   // Hành động => đọc dữ liệu từ CSDL (bảng khoa)=> trình bày
     $manv=$_POST['txtkey']; 
     $sql_select="SELECT * FROM t_nhanvien where manv = '".$manv."'";

   } else {
     $sql_select="SELECT * FROM t_nhanvien";
   }    
   $resutl=$conn->query($sql_select); // Thực hiện
    ?>
<?php
// Để đọc dữ liệu => vòng lặp => while => mảng
// Trình bày dữ liệu trong Table
    echo "<table border='1'>";
    echo "<tr>";
      echo "<td align = 'center'><b>STT</b></td>";
      echo "<td align = 'center'><b>Mã nhân viên</b></td>";
      echo "<td align = 'center'><b>Tên nhân viên</b></td>";
      echo "<td align = 'center'><b>Email</b></td>";
      echo "<td align = 'center'><b>Điện thoại</b></td>";
      echo "<td align = 'center'><b>Ngày sinh</b></td>";
      echo "<td align = 'center'><b>Mã bộ phận</b></td>";
      echo "<td align = 'center'><b>Mã dịch vụ</b></td>";
      echo "<td align = 'center'><b>Lương</b></td>";
      echo "<td align = 'center' colspan = '2'><a href ='../nhanvien/formthem.php'>ADD</a></td>";

    echo "</tr>";
    $i=0;
    while ($row=$resutl->fetch_assoc()){
    $i = $i + 1;
    $manvxoa= $row['manv'];
    echo "<tr>";
      echo "<td>".$i."<br>";
      echo "<td>".$row['manv']."<br>";
      echo "<td>".$row['hoten']."<br>";
      echo "<td>".$row['email']."<br>";
      echo "<td>".$row['dienthoai']."<br>";
      echo "<td>".$row['ngaysinh']."<br>";
      echo "<td>".$row['mabp']."<br>";
      echo "<td>".$row['madv']."<br>";
      echo "<td>".$row['luong']."<br>";
      echo "<td align = 'center'><a href ='formsua.php?manv=$manvxoa'>Edit</a></td>";
      echo "<td align = 'center'><a href ='xoanhanvien.php?manv=$manvxoa'>Del</a></td>";
    }
    echo "</tr>";
  echo "</table>";
echo "</center>";
// Đóng kết nối
?>
  </body>
</html>
