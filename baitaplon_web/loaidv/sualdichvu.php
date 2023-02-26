<?php
include_once('../loaidv/connect.php');
        $maloaidv=$_POST['txtmaloaidv']; 
        $tenloaidv=$_POST['txttenloaidv'];
        $madv=$_POST['txtmadv'];
         $sql_update="Update t_loaidv set tenloaidv='".$tenloaidv."',madv='".$madv."'where maloaidv = '".$maloaidv."'";
         $result=$conn->query($sql_update);
         if (!$result)
         {
             echo 'Lỗi thêm<br>'.$sql_update."<br>".$conn->error;
         }
         else{
             header('location:http://localhost/baitaplon_web/loaidv/loaidichvu.php');
         }
         $conn->close();

?>

