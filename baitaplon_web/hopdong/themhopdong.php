<?php
include_once('../hopdong/connect.php');
          $mahd=$_POST['txtmahd'];
          $makh=$_POST['txtmakh'];
          $madv=$_POST['txtmadv'];
          $ngaythue=$_POST['txtngaythue'];
          $ngayhethan=$_POST['txtngayhethan'];
          $gia=$_POST['txtgia'];
          $manv=$_POST['txtmanv'];
         if(isset($_POST['txtmahd'])&& !empty($_POST['txtmahd']))
        {
            $sql_check="SELECT mahd FROM t_hopdong WHERE mahd='".$mahd."'";
            $kt=$conn->query($sql_check);
        }
        if (!$kt)
        {
           echo "Trùng mã";
        }
        else{
         $sql_insert="Insert into t_hopdong values('".$mahd."','".$makh."','".$madv."','".$ngaythue."','".$ngayhethan."','".$gia."','".$manv."')";
         $result=$conn->query($sql_insert);
         if ($result)
         {
             echo ' Thêm dữ liệu thành công';
         }
         else{
             echo 'Lỗi thêm<br>'.$sql_insert."<br>".$conn->error;
         } 
         $conn->close();
         header('location:http://localhost/baitaplon_web/hopdong/hopdong.php');
         }
?>

