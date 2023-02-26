<?php
include_once('../dichvu/connect.php');
        $madv=$_POST['txtmadv']; 
        $tendv=$_POST['txttendv'];
        $maloaidv=$_POST['txtmaloaidv'];
        $gia=$_POST['txtgia'];
         if(isset($_POST['txtmadv'])&& !empty($_POST['txtmadv']))
        {
            $sql_check="SELECT madv FROM t_dichvu WHERE madv='".$madv."'";
            $kt=$conn->query($sql_check);
        }
        if (!$kt)
        {
           echo "Trùng mã";
        }
        else{
         $sql_insert="Insert into t_dichvu values('".$madv."','".$tendv."','".$maloaidv."','".$gia."')";
         $result=$conn->query($sql_insert);
         if ($result)
         {
             echo ' Thêm dữ liệu thành công';
         }
         else{
             echo 'Lỗi thêm<br>'.$sql_insert."<br>".$conn->error;
         } 
         $conn->close();
         header('location:http://localhost/baitaplon_web/dichvu/dichvu.php');
         }
?>

