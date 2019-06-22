<?php
date_default_timezone_set("Asia/Kolkata");
$extract = $_GET['carrylink'];
$explo = explode('^', $extract);
$classname = $explo[0];
$session = $explo[1];
$month = $explo[2];
include('dbConfig.php');
$q = "select * from admin where class='$classname' and session='$session' and month='$month'";
$sql = mysqli_query($con, $q);

?>

<table border="2px" height="100" width="50%" align="center" style="text-align:center">

    <tr>
        <th style="text-align:center">Serial No</th>
        <th style="text-align:center">Student Name</th>
        <th style="text-align:center">Fee Month</th>
    </tr><br>
    <?php
    $i = 0;
    while ($dta = mysqli_fetch_assoc($sql)) {
        ?>
        <tr>
            <td><?php echo ++$i ?></td>
            <td><?php echo $dta['name'] ?></td>
          
            <td>
                <?php echo $dta['month']?>
            </td>

        </tr>
    <?php
} ?>
</table>