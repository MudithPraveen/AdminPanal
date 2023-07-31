<?php
require('./conn.php');
$reg=$_GET['reg'];

$sql="DELETE from student where reg='$reg';";
$res=mysqli_query($con,$sql);

if($res){
    header('location:./home.php');
}
?>