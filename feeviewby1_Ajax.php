<?php
$extract = $_GET['carrylink'];
$explo = explode('^', $extract);
$classname = $explo[0];
$session = $explo[1];
include('dbConfig.php');
$q = "select distinct name from admin where class='$classname' and session='$session'";
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
                <?php
                $sql1 = mysqli_query($con, "select * from admin where name='$dta[name]' and class='$classname'");
                while ($data = mysqli_fetch_assoc($sql1)) {
                    ?>
                    <?php echo $data['month'] ?> 
                <?php
                echo ',';
                } ?>
            </td>

        </tr>
    <?php
} ?>
</table>