<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FORM SỬA DỊCH VỤ</title>
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
include_once('../dichvu/connect.php');
$madv=$_REQUEST['madv'];
//
$sql_tim="SELECT * FROM t_dichvu WHERE madv = '".$madv."'";
$result=$conn->query($sql_tim);
//đọc dữ liệu
while ($row = $result->fetch_assoc())
{
  $madv=$row['madv'];
  $tendv=$row['tendv'];
  $maloaidv=$row['maloaidv'];
  $gia=$row['gia'];
}
?>
<form action="suadichvu.php" method="POST">
   <center>
       <table>
        <h2>SỬA THÔNG TIN DỊCH VỤ</h2>
            <tr>
              <td>
                Mã dịch vụ
              </td>
              <td><input type="text" name="txtmadv" readonly value="<?php echo $madv;?>"></td>
            </tr>
            <tr>
              <td>
                Tên dịch vụ
              </td>
              <td><input type="text" name="txttendv" value="<?php echo $tendv;?>"></td>
            </tr>
            <tr>
              <td>
                Mã loại dịch vụ
              </td>
              <td><input type="text" name="txtmaloaidv" readonly value="<?php echo $maloaidv;?>"></td>
            </tr>
            <tr>
              <td>
                Giá
              </td>
              <td><input type="text" name="txtgia" value="<?php echo $gia;?>"></td>
            </tr>
            <tr>
              <td colspan="2" align="center"><input type="submit" value="Lưu thông tin"></td>
            </tr>
       </table>
   </center>
    </form>
</body>
</html>