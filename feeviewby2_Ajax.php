<?php
$extract = $_GET['carrylink'];
$explo = explode('^', $extract);
$classname = $explo[0];
$session = $explo[1];
include "dbConfig.php";
$q = "select distinct month from admin where class='$classname' and session='$session'";
$sql = mysqli_query($con, $q);
?>
<td>
    <span style="font-size:20px;">Month: </span>&nbsp;
    <select name="month" id="month">
        <option value="">--Select--</option>
        <?php
        while ($data = mysqli_fetch_assoc($sql)) { ?>

            <option value="<?php echo $data['month'] ?>"><?php echo $data['month'] ?></option>

        <?php  }
    ?>
    </select>
    <button class="btn btn-info" onclick="monview();">View</button>
</td>