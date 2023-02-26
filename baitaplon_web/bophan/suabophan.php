<?php
include_once('../bophan/connect.php');
        $mabp=$_POST['txtmabp']; 
        $tenbp=$_POST['txttenbp'];
         $sql_update="Update t_bophan set tenbp='".$tenbp."'where mabp = '".$mabp."'";
         $result=$conn->query($sql_update);
         if (!$result)
         {
             echo 'Lỗi thêm<br>'.$sql_update."<br>".$conn->error;
         }
         else{
             header('location:http://localhost/baitaplon_web/bophan/bophan.php');
         }
         $conn->close();

?>

