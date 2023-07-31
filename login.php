<?php include('./nav.php'); ?>
<div >
    <form class="m-5" action="./script.php" method="post">
        <h1 class="ms-5">Login</h1>
        <label class="form-label" for="">Username</label>
        <input class="form-control" type="text" name="un"><br>
        <label class="form-label" for="">Password</label>
        <input class="form-control" type="text" name="pw"><br>
        <input class="btn btn-success col-2"type="submit" name="login" value="Login">
        <a class="btn btn-secondary" href="./index.php">Back</a>
    </form>
</div>
<?php include('./footer.php'); ?>
