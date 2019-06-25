<?php
session_start();
if (isset($_POST['subm'])) {
    extract($_POST);
    include "dbConfig.php";
    $sql = mysqli_query($con, "select * from login where user='$_SESSION[uid]'");

    $data = mysqli_fetch_assoc($sql);
    if ($data['pass'] == $pass) {

        if ($npass == $cpass) {

            $sql1 = mysqli_query($con, "UPDATE `login` SET `pass`='$npass'where user='$_SESSION[uid]' ");
            $_SESSION['HOUSE_suc'] = "Successfully Updated...";
            header('location:api.php?link=0CHNG');
        } else {
            $_SESSION['HOUSE_err'] = "Error in Updating";
            header('location:api.php?link=0CHNG');
        }
    } else {
        $_SESSION['HOUSE_err'] = "Error in Updating";
        header('location:api.php?link=0CHNG');
    }
}
