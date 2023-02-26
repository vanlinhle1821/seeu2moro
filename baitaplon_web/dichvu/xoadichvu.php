<?php
include_once('../dichvu/connect.php');
$madv=$_REQUEST['madv'];
//Xóa với mã lấy được
$dsql_del="DELETE FROM t_dichvu WHERE madv = '".$madv."'";
$result=$conn->query($dsql_del);
if(!$result)
{
  echo "Lỗi xóa". $dsql_del;
} else
{
  header('location:http://localhost/baitaplon_web/dichvu/dichvu.php');
}
?>