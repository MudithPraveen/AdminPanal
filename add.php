<?php include('./nav.php'); ?>
<div class="m-5 ">
    <h1>Add student</h1>
    <form action="./script.php" method="post">
        <label class="form-label" for="">Regster No</label>
        <input class="form-control" type="text" name="reg"><br>
        <label class="form-label" for="">Name</label>
        <input class="form-control" type="text" name="name"><br>
        <label class="form-label" for="">Year</label>
        <input class="form-control" type="number" name="year"><br>
        <label class="form-label" for="">Faculty</label>
        <input class="form-control" type="text" name="fac"><br>
        <input class="btn btn-success" type="submit" value="Add" name="add">
        <a class="btn btn-secondary" href="./home.php">Back</a>
    </form>
</div>
<?php include('./footer.php'); ?>