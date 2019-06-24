<?php
$extract = $_GET['carrylink'];
$explo = explode('^', $extract);
$classname = $explo[0];
$session = $explo[1];
include('dbConfig.php');
$q = "select * from admin where class='$classname' and session='$session' and remarks='Admission'";
$sql = mysqli_query($con, $q);

?>
<form action="section.php" method="post">
    <table border="2px" height="100" width="50%" align="center" style="text-align:center">

        <tr>
            <th style="text-align:center">Serial No</th>
            <th style="text-align:center">Student Name</th>
            <th style="text-align:center">Reg No</th>
            <th style="text-align:center">Section</th>
            <th style="text-align:center">Father Name</th>

        </tr><br>
        <?php
        $i = 0;
        $serial = 0;
        while ($dta = mysqli_fetch_assoc($sql)) {
            ?>

            <tr>
                <td><?php echo ++$i ?></td>
                <td><?php echo $dta['name'] ?></td>
                <td><?php echo $dta['regno'] ?></td>



                <td><input type="checkbox" name="check[]" id="chck<?php echo $serial ?>" value="<?php echo $dta['regno'] ?>" onclick="changeve(<?php echo $serial ?>);">
                    <select name="section[]" type="text" id="section<?php echo $serial ?>" disabled>
                        <option value="<?php echo $dta['section'] ?>"><?php echo $dta['section'] ?></option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                    </select>
                    <?php $serial++; ?>


                <td><?php echo $dta['fname'] ?></td>

            </tr>
        <?php
    } ?>
        <tr>
            <td colspan="5">
                <button type="submit" name="submit" class="btn btn-warning">Update</button></td>
            </td>
        </tr>
    </table>
</form>