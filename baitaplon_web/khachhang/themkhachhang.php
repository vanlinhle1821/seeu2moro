<?php
include_once('../khachhang/connect.php');
        $makh=$_POST['txtmakh'];
        $hoten=$_POST['txthoten'];
        $email=$_POST['txtemail'];
        $dienthoai=$_POST['txtdienthoai'];
        $gioitinh=$_POST['txtgioitinh'];
        $ngaysinh=$_POST['txtngaysinh'];
        $diachi=$_POST['txtdiachi'];
         if(isset($_POST['txtmakh'])&& !empty($_POST['txtmakh']))
        {
            $sql_check="SELECT makh FROM t_kh WHERE makh='".$makh."'";
            $kt=$conn->query($sql_check);
        }
        if (!$kt)
        {
           echo "Trùng mã";
        }
        else{
         $sql_insert="Insert into t_kh values('".$makh."','".$hoten."','".$email."','".$dienthoai."','".$gioitinh."','".$ngaysinh."','".$diachi."')";
         $result=$conn->query($sql_insert);
         if ($result)
         {
             echo ' Thêm dữ liệu thành công';
         }
         else{
             echo 'Lỗi thêm<br>'.$sql_insert."<br>".$conn->error;
         } 
         $conn->close();
         header('location:http://localhost/baitaplon_web/khachhang/khachhang.php');
         }
?>

