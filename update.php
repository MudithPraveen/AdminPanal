<?php include('./nav.php'); 
    require('./conn.php');
    $reg=$_GET['reg'];
    $sql="SELECT * from student where reg='$reg';";
    $res=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($res);

?>
<div class="m-5">
    <h1>Update student</h1>
    <form class="mt-3" action="./script.php" method="post">
        <label class="form-label" for="">Regster No</label>
        <input class="form-control" type="text" name="reg" value="<?php echo $row['reg'] ?> " readonly><br>
        <label class="form-label" for="">Name</label>
        <input class="form-control" type="text" name="name" value="<?php echo $row['name'] ?>"><br>
        <label class="form-label"for="">Year</label>
        <input class="form-control" type="number" name="year" value="<?php echo $row['year'] ?>"><br>
        <label class="form-label" for="">Faculty</label>
        <input class="form-control" type="text" name="fac" value="<?php echo $row['fac'] ?>"><br>
        <input class="btn btn-success" type="submit" value="Update" name="update">
        <a class="btn btn-secondary" href="./home.php">Back</a>
    </form>
</div>
<?php include('./footer.php'); ?>