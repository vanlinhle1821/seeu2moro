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
include_once('../nhanvien/connect.php');
$manv=$_REQUEST['manv'];
//
$sql_tim="SELECT * FROM t_nhanvien WHERE manv = '".$manv."'";
$result=$conn->query($sql_tim);
//đọc dữ liệu
while ($row = $result->fetch_assoc())
{
        $manv=$row['manv']; 
        $hoten=$row['hoten'];
        $email=$row['email'];
        $dienthoai=$row['dienthoai'];
        $ngaysinh=$row['ngaysinh'];
        $mabp=$row['mabp'];
        $madv=$row['madv'];
        $luong=$row['luong'];
}
?>
<form action="suanhanvien.php" method="POST">
   <center>
       <table>
        <h2>FORM SỬA NHÂN VIÊN</h2>
            <tr>
              <td>
                Mã nhân viên
              </td>
              <td><input type="text" name="txtmanv" readonly value="<?php echo $manv;?>"></td>
            </tr>
            <tr>
              <td>
                Tên nhân viên
              </td>
              <td><input type="text" name="txthoten" value="<?php echo $hoten;?>"></td>
            </tr>
            <tr>
              <td>
                Email
              </td>
              <td><input type="text" name="txtemail" value="<?php echo $email;?>"></td>
            </tr>
            <tr>
              <td>
                Điện thoại
              </td>
              <td><input type="text" name="txtdienthoai" value="<?php echo $dienthoai;?>"></td>
            </tr>
            <tr>
              <td>
                Ngày sinh
              </td>
              <td><input type="text" name="txtngaysinh" value="<?php echo $ngaysinh;?>"></td>
            </tr>
            <tr>
              <td>Mã bộ phận</td>
              <td>
                  <select name="txtmabp">
                    <?php
                    $sql_sl="SELECT mabp FROM t_bophan";
                    $sl_khoa=$conn->query($sql_sl);
                    //đọc => while
                    while($row1=$sl_khoa->fetch_assoc())
                   {
                        $mabp=$row1['mabp'];
                        echo "<option value=$mabp>".$mabp."</option>";
                    }
                    ?>
                    </select>
              </td>
            </tr>
            <tr>
              <td>Mã dịch vụ</td>
              <td>
                  <select name="txtmadv">
                    <?php
                    $sql_sl1="SELECT madv FROM t_dichvu";
                    $sl_dv=$conn->query($sql_sl1);
                    //đọc => while
                    while($row2=$sl_dv->fetch_assoc())
                   {
                        $madv=$row2['madv'];
                        echo "<option value=$madv>".$madv."</option>";
                    }
                    ?>
                    </select>
              </td>
            </tr>
            <tr>
              <td>
                Lương
              </td>
              <td><input type="text" name="txtluong" value="<?php echo $luong;?>"></td>
            </tr>
            <tr>
              <td colspan="2" align="center"><input type="submit" value="Lưu thông tin"></td>
            </tr>
       </table>
   </center>
    </form>
</body>
</html>