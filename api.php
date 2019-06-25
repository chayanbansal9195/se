<?php
session_start();
date_default_timezone_set("Asia/Kolkata");
include "class.php";
if ($_SESSION['uid']) { } else {
  header('location:index.php');
}

//If API doesnot get any Link Redirect to its Home page page.

if (isset($_REQUEST['link'])) {

  $get_link = ($_REQUEST['link'] != '') ? $_REQUEST['link'] : '000';



  //Taking New object of Page_url class.

  $url_get = new page_url();

  //send $get_link to Class "page_url" function  get_page().

  $row = $url_get->get_page($get_link);
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SED--<?php echo $url_get->page_title; ?></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
  <script src="css/jquery-1.11.1.min.js"></script>
</head>

<body style="background-image:url('images/bg.jpg');background-position: center;background-repeat: no-repeat;background-size: cover; height: 100%;">



  <div>
    <span class="hidden-sm hidden-xs pull-left date-style" style="margin-top:10px;margin-left:20px;font-family: 'Sofia';font-size: 22px;"><img src="images/1.png" style="border-radius: 50%;margin-top:-10px;" height="40px" alt=""> SED</span>
    <!-- date time -->

    <span class="hidden-sm hidden-xs pull-left date-style" style="margin-top:15px;margin-left:800px;margin-right:60px"><?php

                                                                                                                        $day = date("l");

                                                                                                                        $today = date("F j, Y ");

                                                                                                                        echo " <b>$day &nbsp; $today</b>"; ?>

    </span>
    <style>

    </style>

    <div class="menubar1" style=" margin-top: none;background-color:none;font-family: Arial, Helvetica, sans-serif; margin-top: 10px;overflow:none">
      <div class="dropdown1">

        <button class="dropbtn2">
          <a style="text-decoration:none;padding: 14px 16px;color:black;background-color:#D2EFF2;" class="dropdown-toggle" data-toggle="dropdown" href="#">

            <i class="fa fa-user fa-fw"></i> <?php echo ucfirst($_SESSION['uid']); ?> <i class="fa fa-caret-down"></i>

          </a>


        </button>

        <div class="dropdown-content1">
          <a href="?link=000"><i class="fa fa-user fa-fw"></i> <?php echo ucfirst($_SESSION['uid']); ?></a>
          <a href="?link=0CHNG"><i class="fa fa-gear fa-fw"></i>Change Password</a>
          <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
        </div>
      </div>
    </div>
    <br><br>
  </div>


  <?php
  include 'menubar.php';
  include $url_get->page_url;
  ?>




</body>

</html>