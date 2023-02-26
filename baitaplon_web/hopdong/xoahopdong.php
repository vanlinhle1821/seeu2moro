<?php
include_once('../hopdong/connect.php');
$mahd=$_REQUEST['mahd'];
//Xóa với mã lấy được
$dsql_del="DELETE FROM t_hopdong WHERE mahd = '".$mahd."'";
$result=$conn->query($dsql_del);
if(!$result)
{
  echo "Lỗi xóa". $dsql_del;
} else
{
  header('location:http://localhost/baitaplon_web/hopdong/hopdong.php');
}
?>