<?php
include_once('../loaidv/connect.php');
        $maloaidv=$_POST['txtmaloaidv']; 
        $tenloaidv=$_POST['txttenloaidv'];
        $madv=$_POST['txtmadv'];
         if(isset($_POST['txtmaloaidv'])&& !empty($_POST['txtmaloaidv']))
        {
            $sql_check="SELECT maloaidv FROM t_loaidv WHERE maloaidv='".$maloaidv."'";
            $kt=$conn->query($sql_check);
        }
        if (!$kt)
        {
           echo "Trùng mã";
        }
        else{
         $sql_insert="Insert into t_loaidv values('".$maloaidv."','".$tenloaidv."','".$madv."')";
         $result=$conn->query($sql_insert);
         if ($result)
         {
             echo ' Thêm dữ liệu thành công';
         }
         else{
             echo 'Lỗi thêm<br>'.$sql_insert."<br>".$conn->error;
         } 
         $conn->close();
         header('location:http://localhost/baitaplon_web/loaidv/loaidichvu.php');
         }
?>

