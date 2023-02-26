<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SỬA HỢP ĐỒNG</title>
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
$mahd=$_REQUEST['mahd'];
//
$sql_tim="SELECT * FROM t_hopdong WHERE mahd = '".$mahd."'";
$result=$conn->query($sql_tim);
//đọc dữ liệu
while ($row = $result->fetch_assoc())
{
  $mahd=$row['mahd'];
  $makh=$row['makh'];
  $madv=$row['madv'];
  $ngaythue=$row['ngaythue'];
  $ngayhethan=$row['ngayhethan'];
  $gia=$row['gia'];
  $manv=$row['manv'];
}
?>
<form action="suahopdong.php" method="POST">
   <center>
       <table>
        <h2>FORM SỬA HỢP ĐỒNG</h2>
            <tr>
              <td>
                Mã hợp đồng
              </td>
              <td><input type="text" name="txtmahd" readonly value="<?php echo $mahd;?>"></td>
            </tr>
            <tr>
              <td>
                Mã khách hàng
              </td>
              <td><input type="text" name="txtmakh" value="<?php echo $makh;?>"></td>
            </tr>
            <tr>
              <td>
                Mã dịch vụ
              </td>
              <td><input type="text" name="txtmadv" value="<?php echo $madv;?>"></td>
            </tr>
            <tr>
              <td>
                Ngày thuê
              </td>
              <td><input type="date" name="txtngaythue" value="<?php echo $ngaythue;?>"></td>
            </tr>
            <tr>
              <td>
                Ngày hết hạn
              </td>
              <td><input type="date" name="txtngayhethan" value="<?php echo $ngayhethan;?>"></td>
            </tr>
            <tr>
              <td>
                Giá
              </td>
              <td><input type="text" name="txtgia" value="<?php echo $gia;?>"></td>
            </tr>
            <tr>
              <td>
                Mã nhân viên
              </td>
              <td><input type="text" name="txtmanv" value="<?php echo $manv;?>"></td>
            </tr>
            <tr>
              <td colspan="2" align="center"><input type="submit" value="Lưu thông tin"></td>
            </tr>
       </table>
   </center>
    </form>
</body>
</html>