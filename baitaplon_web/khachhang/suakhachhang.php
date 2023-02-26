<?php
include_once('../khachhang/connect.php');
        $makh=$_POST['txtmakh'];
        $hoten=$_POST['txthoten'];
        $email=$_POST['txtemail'];
        $dienthoai=$_POST['txtdienthoai'];
        $gioitinh=$_POST['txtgioitinh'];
        $ngaysinh=$_POST['txtngaysinh'];
        $diachi=$_POST['txtdiachi'];
         $sql_update="Update t_kh set hoten='".$hoten."',email='".$email."',dienthoai='".$dienthoai."',gioitinh='".$gioitinh."',ngaysinh='".$ngaysinh."',diachi='".$diachi."' where makh = '".$makh."'";
         $result=$conn->query($sql_update);
         if (!$result)
         {
             echo 'Lỗi thêm<br>'.$sql_update."<br>".$conn->error;
         }
         else{
             header('location:http://localhost/baitaplon_web/khachhang/khachhang.php');
         }
         $conn->close();

?>

