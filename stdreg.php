<?php
date_default_timezone_set("Asia/Kolkata");
$today = date("F j, Y ");
$time = date("h:m");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        input {
            border: none;
            text-align: center;
        }
        

        h2 {
            text-align: center;
            margin-bottom: 40px;
        }
    </style>

</head>

<body>
    <h2>STUDENT ADMISSION VERIFICATION PAGE</h2>


    <table border="2px" height="100" width="50%" align="center" style="text-align:center">
        <tr>
            <th style="text-align:center">Serial No</th>
            <th style="text-align:center">Name</th>
            <th style="text-align:center">Form Number</th>
            <th style="text-align:center">Father Name</th>
            <th style="text-align:center">Class Applied For</th>
            <th style="text-align:center">Total Admission fee</th>
            <th style="text-align:center">Date</th>
            <th style="text-align:center">View</th>
        </tr>
        <?php
        include 'dbConfig.php';
        $sql = mysqli_query($con, "select * from stdreg where status=0");
        $i = 1;
        while ($data = mysqli_fetch_assoc($sql)) {
            ?>
            <form action="stdverifyaction.php" method="post">

                <tr>
                    <td><?php echo $i ?></td>
                    <td><input type="text" name="name" value="<?php echo $data['name'] ?>" id="" readonly></td>
                    <td><input type="text" name="formno" value="<?php echo $data['formno'] ?>" readonly></td>
                    <td><input type="text" name="fname" value="<?php echo $data['fname'] ?>" readonly></td>
                    <td><input type="text" name="class" value="<?php echo $data['newclass'] ?>" readonly></td>
                    <?php
                    $sql1 = mysqli_query($con, "select * from feestruc where class='$data[newclass]'");
                    $data1 = mysqli_fetch_assoc($sql1);
                    $fee = $data1['admission'] + $data1['tution'];
                    ?>
                    <td><input type="text" name="paidamount" value="<?php echo $fee ?>" readonly></td>
                    <td><input type="text" name="date" value="<?php echo $today ?>" readonly></td>
                    <input type="hidden" name="time" value="<?php echo $time ?>" readonly>
                    <td>
                        <div class="btn"><input type="submit" value="Verify"></div>
                    </td>
                </tr>

            </form>

            <?php $i++;
        } ?>
    </table>

</body>

</html>