<?php
$classname = $_GET['carrylink'];
include "dbConfig.php";
$sql = mysqli_query($con, "select * from district where statename='$classname'");

?>
<tr>
    <td>






        <label for="">District<span style="color:red">*</span></label>
        <select name="district" id="district" required>
            <option value="">--Select--</option>
            <?php while ($data = mysqli_fetch_assoc($sql)) { ?>
                <option value="<?php echo $data['districtname'] ?>">
                    <?php echo $data['districtname'] ?>
                </option>
            <?php } ?>
        </select>
    </td>
</tr>