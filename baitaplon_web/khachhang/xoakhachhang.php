<?php
include_once('../khachhang/connect.php');
$makh=$_REQUEST['makh'];
//Xóa với mã lấy được
$dsql_del="DELETE FROM t_kh WHERE makh = '".$makh."'";
$result=$conn->query($dsql_del);
if(!$result)
{
  echo "Lỗi xóa". $dsql_del;
} else
{
  header('location:http://localhost/baitaplon_web/khachhang/khachhang.php');
}
?>