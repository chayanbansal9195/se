<?php
$classname = $_GET['carrylink'];
include('dbConfig.php');
$sql1 = mysqli_query($con, "select * from marks where subname='$classname'");

?>
<td>

    <span style="font-size:20px;">Exam: </span>&nbsp;

    <select name="exam" id="exam">
        <?php while ($data1 = mysqli_fetch_assoc($sql1)) { ?>
            <option value="<?php echo $data1['exam'] ?>">
                <?php echo $data1['exam'] ?>
            </option>
        <?php } ?>
    </select>
    <button class="btn" onClick="viewstu();">Students</button>
</td>