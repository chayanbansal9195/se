<?php
$classname = $_GET['carrylink'];
include('dbConfig.php');
$sql = mysqli_query($con, "select distinct class from admin where session='$classname'");

?>
<td>
    <span style="font-size:20px;">Class: </span>&nbsp;<select name="class" id="classn">
        <option value="">--Select--</option>
        <?php while ($data = mysqli_fetch_assoc($sql)) { ?>
            <option value="<?php echo $data['class'] ?>">
                <?php echo $data['class'] ?>
            </option>
           
        <?php } ?>
    </select>
    <button class="btn btn-info" onclick="views();">View</button>
</td>