<?php
$classname = $_GET['carrylink'];
include('dbConfig.php');
$sql = mysqli_query($con, "select * from subject where class='$classname'");

?>
<td>

    <span style="font-size:20px;">Subject: </span>&nbsp;
    <select name="subname" id="subject">
        <?php while ($data = mysqli_fetch_assoc($sql)) { ?>
            <option value="<?php echo $data['subname'] ?>">
                <?php echo $data['subname'] ?>
            </option>
            
        <?php } ?>
    </select>
    <input type="hidden" value="<?php echo $classname?>" name="class">
</td>