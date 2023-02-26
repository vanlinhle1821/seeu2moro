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
         if(isset($_POST['txtmanv'])&& !empty($_POST['txtmanv']))
        {
            $sql_check="SELECT manv FROM t_nhanvien WHERE manv='".$manv."'";
            $kt=$conn->query($sql_check);
        }
        if (!$kt)
        {
           echo "Trùng mã";
        }
        else{
         $sql_insert="Insert into t_nhanvien values('".$manv."','".$hoten."','".$email."','".$dienthoai."','".$ngaysinh."','".$mabp."','".$madv."','".$luong."')";
         $result=$conn->query($sql_insert);
         if ($result)
         {
             echo ' Thêm dữ liệu thành công';
         }
         else{
             echo 'Lỗi thêm<br>'.$sql_insert."<br>".$conn->error;
         } 
         $conn->close();
         header('location:http://localhost/baitaplon_web/nhanvien/nhanvien.php');
         }
?>

