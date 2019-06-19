<?php
session_start();
date_default_timezone_set("Asia/Kolkata");
  include "class.php";
  if($_SESSION['uid']){

  }
    else{
      header('location:index.php');
    }

    //If API doesnot get any Link Redirect to its Home page page.

    if(isset($_REQUEST['link'])){

      $get_link = ($_REQUEST['link']!='')?$_REQUEST['link']:'000';

     

      //Taking New object of Page_url class.

      $url_get = new page_url();

      //send $get_link to Class "page_url" function  get_page().

     $row=$url_get->get_page($get_link);

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

</head>
<body>



<div>
<span class="hidden-sm hidden-xs pull-left date-style" style="margin-top:20px;margin-left:20px;font-size:25px;" >SED</span>
    <!-- date time -->

<span class="hidden-sm hidden-xs pull-left date-style" style="margin-top:20px;margin-left:1000px;"><?php 

$day = date("l");

$today = date("F j, Y ");

echo " <b>$day &nbsp; $today</b>"; ?>

</span>
</div>
<br><br>



<?php
include 'menubar.php';
include $url_get->page_url;
?>

</body>
</html>

