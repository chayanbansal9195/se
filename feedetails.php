<?php
$sid = $_REQUEST['sid'];
include "dbConfig.php";
$sql = mysqli_query($con, "select * from admin where regno = '$sid'");
$dta = mysqli_fetch_assoc($sql);
?>

<style>
    input {

        float: left;
        margin-bottom: 50px;
        width: 20px;
        height: 20px;
        border-radius: 4px;
        padding: 20px 20px 20px 20px;
    }
</style>

<table border="2px" height="100" width="30%" align="center" style="text-align:center;float:left; margin-left:90px">

    <tr>

        <th style="text-align:center">Student Name</th>
        <th style="text-align:center">Fathers Name</th>
        <th style="text-align:center">Reg No</th>
    </tr><br>
    <tr>

        <td><?php echo $dta['name'] ?></td>
        <td><?php echo $dta['fname'] ?></td>
        <td><?php echo $dta['regno'] ?></a></td>
    </tr>
</table>
<form action="feesaction.php" method="post">
    <table border="2px" height="200" width="15%" align="center" style="text-align:center;float:left; margin-left:300px;margin-top:-20px">

        <tr>

            <th style="text-align:center">Month</th>
        </tr><br>


        <?php
        $sql1 = mysqli_query($con, "select * from admin where regno='$sid' and month='01'");
        ?>
        <tr>

            <td>
                <input type="checkbox" name="check[]" value="01" <?php if ($data1 = mysqli_fetch_assoc($sql1) > 0) { ?> checked disabled <?php } ?>>
                January
            </td>
        </tr>

        <?php
        $sql2 = mysqli_query($con, "select * from admin where regno='$sid' and month='02'");
        ?>
        <tr>

            <td>
                <input type="checkbox" name="check[]" value="02" <?php if ($data2 = mysqli_fetch_assoc($sql2) > 0) { ?> checked disabled <?php } ?>>
                February
            </td>
        </tr>

        <?php
        $sql3 = mysqli_query($con, "select * from admin where regno='$sid' and month='03'");
        ?>
        <tr>

            <td>
                <input type="checkbox" name="check[]" value="03" <?php if ($data3 = mysqli_fetch_assoc($sql3) > 0) { ?> checked disabled <?php } ?>>
                March
            </td>
        </tr>

        <?php
        $sql4 = mysqli_query($con, "select * from admin where regno='$sid' and month='04'");
        ?>
        <tr>

            <td>
                <input type="checkbox" name="check[]" value="04" <?php if ($data4 = mysqli_fetch_assoc($sql4) > 0) { ?> checked disabled <?php } ?>>
                April
            </td>
        </tr>

        <?php
        $sql5 = mysqli_query($con, "select * from admin where regno='$sid' and month='05'");
        ?>
        <tr>

            <td>
                <input type="checkbox" name="check[]" value="05" <?php if ($data5 = mysqli_fetch_assoc($sql5) > 0) { ?> checked disabled <?php } ?>>
                May
            </td>
        </tr>

        <?php
        $sql6 = mysqli_query($con, "select * from admin where regno='$sid' and month='06'");
        ?>
        <tr>

            <td>
                <input type="checkbox" name="check[]" value="06" <?php if ($data6 = mysqli_fetch_assoc($sql6) > 0) { ?> checked disabled <?php } ?>>
                June
            </td>
        </tr>

        <?php
        $sql7 = mysqli_query($con, "select * from admin where regno='$sid' and month='07'");
        ?>
        <tr>

            <td>
                <input type="checkbox" name="check[]" value="07" <?php if ($data7 = mysqli_fetch_assoc($sql7) > 0) { ?> checked disabled <?php } ?>>
                July
            </td>
        </tr>

        <?php
        $sql8 = mysqli_query($con, "select * from admin where regno='$sid' and month='08'");
        ?>
        <tr>

            <td>
                <input type="checkbox" name="check[]" value="08" <?php if ($data8 = mysqli_fetch_assoc($sql8) > 0) { ?> checked disabled <?php } ?>>
                August
            </td>
        </tr>

        <?php
        $sql9 = mysqli_query($con, "select * from admin where regno='$sid' and month='09'");
        ?>
        <tr>

            <td>
                <input type="checkbox" name="check[]" value="09" <?php if ($data9 = mysqli_fetch_assoc($sql9) > 0) { ?> checked disabled <?php } ?>>
                September
            </td>
        </tr>

        <?php
        $sql10 = mysqli_query($con, "select * from admin where regno='$sid' and month='10'");
        ?>
        <tr>

            <td>
                <input type="checkbox" name="check[]" value="10" <?php if ($data10 = mysqli_fetch_assoc($sql10) > 0) { ?> checked disabled <?php } ?>>
                October
            </td>
        </tr>

        <?php
        $sql11 = mysqli_query($con, "select * from admin where regno='$sid' and month='11'");
        ?>
        <tr>

            <td>
                <input type="checkbox" name="check[]" value="11" <?php if ($data11 = mysqli_fetch_assoc($sql11) > 0) { ?> checked disabled <?php } ?>>
                November
            </td>
        </tr>
        <?php
        $sql12 = mysqli_query($con, "select * from admin where regno='$sid' and month='12'");
        ?>
        <tr>

            <td>
                <input type="checkbox" name="check[]" value="12" <?php if ($data12 = mysqli_fetch_assoc($sql12) > 0) { ?> checked disabled <?php } ?>>
                December
            </td>

        </tr>
        <tr>
            <td>
                <input type="hidden" name="rollno" value="<?php echo $sid ?>">
                <input type="hidden" name="class" value="<?php echo $dta['class'] ?>">
                <input type="hidden" name="session" value="<?php echo $dta['session'] ?>">
                <button class="btn" name="submit" type="submit">Pay</button>
            </td>
        </tr>
    </table>

</form