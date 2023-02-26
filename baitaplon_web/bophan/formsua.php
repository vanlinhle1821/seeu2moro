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
include_once('../bophan/connect.php');
$mabp=$_REQUEST['mabp'];
//
$sql_tim="SELECT * FROM t_bophan WHERE mabp = '".$mabp."'";
$result=$conn->query($sql_tim);
//đọc dữ liệu
while ($row = $result->fetch_assoc())
{
  $mabp=$row['mabp'];
  $tenbp=$row['tenbp'];
}
?>
<form action="suabophan.php" method="POST">
   <center>
       <table>
        <h2>SỬA THÔNG TIN BỘ PHẬN</h2>
            <tr>
              <td>
                Mã bộ phận
              </td>
              <td><input type="text" name="txtmabp" readonly value="<?php echo $mabp;?>"></td>
            </tr>
            <tr>
              <td>
                Tên bộ phận
              </td>
              <td><input type="text" name="txttenbp" value="<?php echo $tenbp;?>"></td>
            </tr>
            <tr>
              <td colspan="2" align="center"><input type="submit" value="Lưu thông tin"></td>
            </tr>
       </table>
   </center>
    </form>
</body>
</html>