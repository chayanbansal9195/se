<?php
$extract = $_GET['carrylink'];
$explo = explode('^', $extract);
$classname = $explo[0];
$subname = $explo[1];
include('dbConfig.php');

$sql = mysqli_query($con, "select * from admin where class='$classname'");

?>

<table border="2px" height="100" width="50%" align="center" style="text-align:center">

  <tr>
    <th style="text-align:center">Serial No</th>
    <th style="text-align:center">Student Name</th>
    <th style="text-align:center">Marks</th>
  </tr><br>
  <?php
  $i = 0;
  while ($dta = mysqli_fetch_assoc($sql)) {
    ?>
    <tr>
      <td><?php echo ++$i ?></td>
      <td><input type="text" name="name[]" value="<?php echo $dta['name'] ?>" readonly></td>

      <td><input type="text" name="marks[]" placeholder="Enter Marks"></td>

    </tr>
  <?php
} ?>
  <input type="hidden" value="<?php echo $classname ?>" name="class">
  <input type="hidden" value="<?php echo $subname ?>" name="subname">
</table>
<br>
    <button class="btn btn-dark" style="margin-left:630px;height:40px;width:80px;">Add</button>