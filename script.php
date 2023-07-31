
<?php 
require('./conn.php');
session_start();
if(isset($_POST['login'])){
    $un=mysqli_real_escape_string($con,$_POST['un']);
    $pw=mysqli_real_escape_string($con,$_POST['pw']);

    $sql="SELECT * from admin where un='$un' and pw='$pw';";
    $res=mysqli_query($con,$sql);

    $row=mysqli_num_rows($res);

    if($row>0){
        $_SESSION['un']=$un;
        header('location:./home.php');
    }
    else{
        header('location:./login.php');
    }
}

if(isset($_POST['add'])){
    $reg=$_POST['reg'];
    $name=$_POST['name'];
    $year=$_POST['year'];
    $fac=$_POST['fac'];

    $sql="INSERT INTO student values('$reg','$name','$year','$fac');";
    $res=mysqli_query($con,$sql);
    if($res){
         header('location:./home.php');
    }else{
        header('location:./add.php');
        echo "unsuccessfull added";
    }
}

if(isset($_POST['update'])){
    $reg=$_POST['reg'];
    $name=$_POST['name'];
    $year=$_POST['year'];
    $fac=$_POST['fac'];

    $sql="UPDATE student set reg='$reg',name='$name',year='$year',fac='$fac' where reg='$reg';";
    $res=mysqli_query($con,$sql);
    if($res){
         header('location:./home.php');
    }else{
        header('location:./update.php');
        echo "unsuccessfull update";
    }
}
?>