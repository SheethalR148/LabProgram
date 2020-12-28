<?php
include 'sql.php';
$str="select * from studentdetails";
$res=mysqli_query($sql,$str);
$i=0;
$myarr=[];
while($arr=mysqli_fetch_assoc($res))
{
    $myarr[$i++]=$arr;
}
echo json_encode($myarr);

