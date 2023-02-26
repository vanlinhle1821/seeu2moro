<?php
include_once('../bophan/connect.php');
        $mabp=$_POST['txtmabp']; 
        $tenbp=$_POST['txttenbp'];
         if(isset($_POST['txtmabp'])&& !empty($_POST['txtmabp']))
        {
            $sql_check="SELECT mabp FROM t_bophan WHERE mabp='".$mabp."'";
            $kt=$conn->query($sql_check);
        }
        if (!$kt)
        {
           echo "Trùng mã";
        }
        else{
         $sql_insert="Insert into t_bophan values('".$mabp."','".$tenbp."')";
         $result=$conn->query($sql_insert);
         if ($result)
         {
             echo ' Thêm dữ liệu thành công';
         }
         else{
             echo 'Lỗi thêm<br>'.$sql_insert."<br>".$conn->error;
         } 
         $conn->close();
         header('location:http://localhost/baitaplon_web/bophan/bophan.php');
         }
?>

