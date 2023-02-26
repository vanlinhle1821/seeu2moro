<?php
include_once('../hopdong/connect.php');
          $mahd=$_POST['txtmahd'];
          $makh=$_POST['txtmakh'];
          $madv=$_POST['txtmadv'];
          $ngaythue=$_POST['txtngaythue'];
          $ngayhethan=$_POST['txtngayhethan'];
          $gia=$_POST['txtgia'];
          $manv=$_POST['txtmanv'];
         $sql_update="Update t_hopdong set makh='".$makh."',madv='".$madv."',ngaythue='".$ngaythue."',ngayhethan='".$ngayhethan."',gia='".$gia."',manv='".$manv."' where mahd = '".$mahd."'";
         $result=$conn->query($sql_update);
         if (!$result)
         {
             echo 'Lỗi thêm<br>'.$sql_update."<br>".$conn->error;
         }
         else{
             header('location:http://localhost/baitaplon_web/hopdong/hopdong.php');
         }
         $conn->close();

?>

