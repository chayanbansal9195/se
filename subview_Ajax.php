<?php
$classname = $_GET['carrylink'];
include('dbConfig.php');
if ($classname == 'all') {
  $sql = mysqli_query($con, "select * from subject");
} else
  $sql = mysqli_query($con, "select * from subject where class='$classname'");

?>

<table border="2px" height="100" width="50%" align="center" style="text-align:center">



  <tr>
    <th style="text-align:center">Serial No</th>
    <th style="text-align:center">Subject Name</th>
    <th style="text-align:center">Subject Code</th>
  </tr>



  <?php
  $i = 0;
  while ($dta = mysqli_fetch_assoc($sql)) {
    ?>
    <tr>
      <td><?php echo ++$i ?></td>
      <td><?php echo $dta['subname'] ?></td>
      <td><?php echo $dta['subcode'] ?></td>

    </tr>
    </tbody>
  <?php
} ?>

</table>