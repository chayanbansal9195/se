<?php
session_start();
if(isset($_SESSION['uid']) && $_SESSION['uid']!=""){
    echo "<script>alert('Already Login.');window.location='api.php?link=000';</script>";
    die();
}
?>

<!DOCTYPE html>

<html>



<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<style>

.menubar {

overflow: hidden;

background-color:#75AAEE;

font-family: Arial, Helvetica, sans-serif;

}

.menubar a {

float: left;

font-size: 16px;

color: white;

text-align: center;

padding: 14px 16px;

text-decoration: none;

}
a {
    text-decoration: none;
    color: red;
}

/* panel */

.textbox
{
width:100%;
height:34px;
padding:6px 12px;
font-size:14px;
line-height:1.42857143;
color:#555;
background-color:#fff;
background-image:none;
border:1px solid #ccc;
border-radius:4px;
-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);
box-shadow:inset 0 1px 1px rgba(0,0,0,.075);
-webkit-transition:border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
-o-transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;
transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
.textarea
{
width:100%;
padding:6px 12px;
font-size:14px;
line-height:1.42857143;
color:#555;
background-color:#fff;
background-image:none;
border:2px solid #ccc;
border-radius:4px;
-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);
box-shadow:inset 0 1px 1px rgba(0,0,0,.075);
-webkit-transition:border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
-o-transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;
transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}



</style>

<table>
    <tr>
        <td width="15%" height="100" align="center" style="font-size:32px;margin-top:100px;"><a href="index.php">Student Enrollment Desk</a> </td>
    </tr>
</table>

<div class="menubar">

<a href="student.php">Student Register</a>
</div>
<!-- panel -->
<div align=center class="col-lg-12">
    <div class="panel panel-default;"style="margin:100px 350px 0px 350px;">
        <div class="panel-heading" style="background:#212529;color:white">
            <h4><i class="fa fa-image fa-fw"></i>Login</h4>
        </div>
        <!-- /.panel-heading -->
        <div style="border:2px" class="panel-body">
        
        <form action="loginacc.php" method="post"> 
            <table  align="center">
           <tr>
                <td width="263" height="51"><span style="font-size:1.4vw;"><em>Username:</em></span></td>
                <td width="459"><input type="text" id="user" name="user" size="20" class="textbox" placeholder="Enter Username" required="required" autocomplete="off" <?php if(isset($_COOKIE['usrname'])!='') { ?> value="<?php echo $_COOKIE['usrname'] ?>" <?php } ?>/>
                </td>
              </tr>
             <tr>
             <td width="263" height="60"><span style="font-size:1.4vw;"><em>Password</em></span></td>
             <td width="459"><input type="password" name="pass" size="20" class="textbox" placeholder="Enter Password" id="pass" required="required" autocomplete="off" <?php if(isset($_COOKIE['psw'])!='') { ?> value="<?php echo $_COOKIE['psw'] ?>" <?php } ?> />
             </td>
             </tr>
    <!-- checkbox -->
             <tr><td width="263" height="63">&nbsp;</td>
                <td width="459">
            <input type="checkbox" name="check" value="remember" <?php if(isset($_COOKIE['usrname'])!='') { ?> checked <?php } ?>>Remember Me
            </td></tr>
           
              <tr>
                <td width="263" height="63">&nbsp;</td>
                <td width="459">
                <input type="submit" name="login" class="btn btn-success"> 
                </td>
              </tr>

           

            </table>
          </form>
            
        </div>
        <!-- .panel-body -->
    </div>
    <!-- /.panel -->
</div>





