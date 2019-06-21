<?php
    extract($_POST);
    include 'dbConfig.php';

    $i = 0;
    foreach ($subname as $val) {
        if ($val != '') {

    $sql1= mysqli_query($con,"select * from subject where subname='$val'and class='$class'");
    if($data=mysqli_fetch_row($sql1)>0){
        continue;
    }
    else{
        if($subcode[$i]==''){

        }

    $sql=mysqli_query($con,"insert into subject(subname,subcode,class)values('$val','$subcode[$i]','$class')");
    
    }
}
$i++;
    }
    header('location:api.php?link=0SUBJ');
    
   
    
?>