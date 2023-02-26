<?php
include_once('../nhanvien/connect.php');
        $manv=$_POST['txtmanv']; 
        $hoten=$_POST['txthoten'];
        $email=$_POST['txtemail'];
        $dienthoai=$_POST['txtdienthoai'];
        $ngaysinh=$_POST['txtngaysinh'];
        $mabp=$_POST['txtmabp'];
        $madv=$_POST['txtmadv'];
        $luong=$_POST['txtluong'];
         $sql_update="Update t_nhanvien set hoten='".$hoten."',email='".$email."',dienthoai='".$dienthoai."',ngaysinh='".$ngaysinh."',mabp='".$mabp."',madv='".$madv."',luong='".$luong."' where manv = '".$manv."'";
         $result=$conn->query($sql_update);
         if (!$result)
         {
             echo 'Lỗi thêm<br>'.$sql_update."<br>".$conn->error;
         }
         else{
             header('location:http://localhost/baitaplon_web/nhanvien/nhanvien.php');
         }
         $conn->close();

?>

