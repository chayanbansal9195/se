<?php
$classname = $_GET['carrylink'];

include('dbConfig.php');

$sql = mysqli_query($con, "select distinct name,fname,regno from admin where class='$classname'");

?>

<table border="2px" height="100" width="50%" align="center" style="text-align:center">

  <tr>
    <th style="text-align:center">Serial No</th>
    <th style="text-align:center">Student Name</th>
    <th style="text-align:center">Fathers Name</th>
    <th style="text-align:center">Reg No</th>
  </tr><br>
  <?php
  $i = 0;
  while ($dta = mysqli_fetch_assoc($sql)) {
    ?>
    <tr>
      <td><?php echo ++$i ?></td>
      <td><?php echo $dta['name'] ?></td>
      <td><?php echo $dta['fname'] ?></td>
      <td><a href="?link=0FVIE&amp;sid=<?php echo $dta['regno'] ?>" style="text-decoration:none;color:red;"><?php echo $dta['regno'] ?></a></td>
    </tr>
  <?php
} ?>
</table>