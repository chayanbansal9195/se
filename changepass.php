<!DOCTYPE html>

<html>



<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>
    /* panel */

    .textbox {
        width: 100%;
        height: 34px;
        padding: 6px 12px;
        font-size: 14px;
        line-height: 1.42857143;
        color: #555;
        background-color: #fff;
        background-image: none;
        border: 1px solid #ccc;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
        -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    }

    .textarea {
        width: 100%;
        padding: 6px 12px;
        font-size: 14px;
        line-height: 1.42857143;
        color: #555;
        background-color: #fff;
        background-image: none;
        border: 2px solid #ccc;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
        -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    }
</style>
<!-- panel -->
<div align=center class="col-lg-12">
    <div class="panel panel-primary" style="margin:100px 350px 0px 350px;">
        <div class="panel-heading" style="background:#5B90D5;color:white">
            <h4><i class="fa fa-image fa-fw"></i>Change Password</h4>
        </div>
        <!-- /.panel-heading -->
        <div style="border:2px" class="panel-body">

            <form action="" method="post">
                <table align="center">
                    <tr>
                        <td width="263" height="51"><span style="font-size:1.4vw;"><em>Current Password:</em></span></td>
                        <td width="459"><input type="text" id="user" name="pass" size="20" class="textbox" placeholder="Enter Current Password" required="required" autocomplete="off" />
                        </td>
                    </tr>
                    <tr>
                        <td width="263" height="60"><span style="font-size:1.4vw;"><em>New Password</em></span></td>
                        <td width="459"><input type="text" name="npass" size="20" class="textbox" placeholder="Enter New Password" id="pass" required="required" autocomplete="off" />
                        </td>
                    </tr>
                    <!-- checkbox -->

                    <tr>
                        <td width="263" height="63">&nbsp;</td>
                        <td width="459">
                            <input type="submit" name="subm" class="btn btn-success">
                        </td>
                    </tr>



                </table>
            </form>

        </div>
        <!-- .panel-body -->
    </div>
    <!-- /.panel -->
</div>


<!-- password -->

<?php
if (isset($_POST['subm'])) {
    extract($_POST);
    include "dbConfig.php";
    $sql = mysqli_query($con, "select * from login where user='$_SESSION[uid]'");
  
    $data = mysqli_fetch_assoc($sql);
    if ($data['pass'] == $pass) {
       
        $sql1 = mysqli_query($con, "UPDATE `login` SET `pass`='$npass'where user='$_SESSION[uid]' ");
        $_SESSION['HOUSE_suc'] = "Successfully Updated...";
       
    } else {
        $_SESSION['HOUSE_suc'] = "Error in Updating";
    }
}
?>