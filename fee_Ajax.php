<?php
$classname=$_GET['carrylink'];
include('dbConfig.php');
if($classname=='all'){
	$sql = mysqli_query($con, "select * from feestruc");
	}
	else
$sql = mysqli_query($con, "select * from feestruc where class='$classname'");

?>

<table border="2px" height="100" width="50%" align="center" style="text-align:center">
  
 
    
    <tr>
    <th style="text-align:center">Serial No</th>
            <th style="text-align:center">Admission Fee</th>
            <th style="text-align:center">Tution Fee</th>
            <th style="text-align:center">Monthly Fee</th>
        </tr>
    
      

        <?php
        $i=0;
        while ($dta = mysqli_fetch_assoc($sql)) {
          ?>
          <tr>
            <td><?php echo ++$i ?></td>
            <td><?php echo $dta['admission']?></td>
            <td><?php echo $dta['tution']?></td>
            <td><?php echo $dta['monthly']?></td>

          </tr>
        </tbody>
      <?php 
    } ?>
      
  </table>