<?php
include_once('../loaidv/connect.php');
$maloaidv=$_REQUEST['maloaidv'];
//Xóa với mã lấy được
$dsql_del="DELETE FROM t_loaidv WHERE maloaidv = '".$maloaidv."'";
$result=$conn->query($dsql_del);
if(!$result)
{
  echo "Lỗi xóa". $dsql_del;
} else
{
  header('location:http://localhost/baitaplon_web/loaidv/loaidichvu.php');
}
?>