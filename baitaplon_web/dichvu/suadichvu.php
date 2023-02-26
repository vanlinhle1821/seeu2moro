<?php
include_once('../dichvu/connect.php');
        $madv=$_POST['txtmadv']; 
        $tendv=$_POST['txttendv'];
        $maloaidv=$_POST['txtmaloaidv'];
        $gia=$_POST['txtgia'];
         $sql_update="Update t_dichvu set tendv='".$tendv."',maloaidv='".$maloaidv."',gia='".$gia."' where madv = '".$madv."'";
         $result=$conn->query($sql_update);
         if (!$result)
         {
             echo 'Lỗi thêm<br>'.$sql_update."<br>".$conn->error;
         }
         else{
             header('location:http://localhost/baitaplon_web/dichvu/dichvu.php');
         }
         $conn->close();

?>

