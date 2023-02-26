<?php
include_once('../bophan/connect.php');
$mabp=$_REQUEST['mabp'];
//Xóa với mã lấy được
$dsql_del="DELETE FROM t_bophan WHERE mabp = '".$mabp."'";
$result=$conn->query($dsql_del);
if(!$result)
{
  echo "Lỗi xóa". $dsql_del;
} else
{
  header('location:http://localhost/baitaplon_web/bophan/bophan.php');
}
?>