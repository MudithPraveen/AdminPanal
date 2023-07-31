<?php include('./nav.php'); 
 require('./conn.php');
?>
<div class="m-5">
    <a class="btn btn-primary" href="./add.php">Add Student</a>
    <table class="table mt-3">
        <tr>
            <th>RegsterNo</th>
            <th>Name</th>
            <th>Year</th>
            <th>Faculty</th>
            <th>Action</th>
        </tr>
        <?php 
            $sql="SELECT * from student;";
            $res=mysqli_query($con,$sql);
            

            while($row=mysqli_fetch_assoc($res)){
                ?>
                <tr>
                    <td><?php echo $row['reg']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['year']; ?></td>
                    <td><?php echo $row['fac']; ?></td>
                    <td>
                        <a class="btn btn-secondary btn-sm" href="./update.php?reg=<?php echo $row['reg']; ?>">Update</a>
                        <a class="btn btn-danger btn-sm" href="./delete.php?reg=<?php echo $row['reg']; ?>">Delete</a>
                    </td>
                </tr>
                <?php
            }
        ?>
    </table>
</div>
<?php include('./footer.php'); ?>