<?php
$classname = $_GET['carrylink'];

$extract = $_GET['carrylink'];
$explo = explode('^', $extract);
$classname = $explo[0];
$class = $explo[1];

include('dbConfig.php');
$sql1 = mysqli_query($con, "select distinct exam from marks where subname='$classname' and class='$class'");

?>
<td>

    <span style="font-size:20px;">Exam: </span>&nbsp;

    <select name="exam" id="exam">
        <option value="">--Select--</option>
        <?php while ($data1 = mysqli_fetch_assoc($sql1)) { ?>
            <option value="<?php echo $data1['exam'] ?>">
                <?php echo $data1['exam'] ?>
            </option>
        <?php } ?>
    </select>
    <button class="btn btn-info" onClick="viewstu();">View</button>
</td>