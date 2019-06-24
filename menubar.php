<!DOCTYPE html>

<html>

<head>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    .menubar {

        overflow: hidden;

        background-color: #75AAEE;

        font-family: Arial, Helvetica, sans-serif;
        margin-top: 20px;

    }

    .menubar a {

        float: left;

        font-size: 16px;

        color: white;

        text-align: center;

        padding: 14px 16px;

        text-decoration: none;

    }



    .dropdown1 {

        float: left;

        overflow: hidden;

    }



    .dropdown1 .dropbtn1 {

        font-size: 16px;

        border: none;

        outline: none;

        color: white;

        padding: 14px 16px;

        background-color: inherit;

        font-family: inherit;

        margin: 0;

    }
    
    .dropdown1 .dropbtn2 {

font-size: 16px;

border: none;

outline: none;

color: white;

padding: 14px 16px;

background-color: inherit;

font-family: inherit;

margin: 0;

}



    .menubar a:hover,
    .dropdown1:hover .dropbtn1 {

        background-color: blue;

    }
    .menubar1 a:hover,
    .dropdown1:hover .dropbtn2 {

        background-color: none;

    }
    


    .dropdown-content1 {

        display: none;

        position: absolute;

        background-color: #f9f9f9;

        min-width: 160px;

        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);

        z-index: 1;

    }



    .dropdown-content1 a {

        float: none;

        color: black;

        padding: 12px 16px;

        text-decoration: none;

        display: block;

        text-align: left;

    }



    .dropdown-content1 a:hover {

        background-color: #ddd;

    }



    .dropdown1:hover .dropdown-content1 {

        display: block;

    }

    .alert:hover {}
</style>
    </head>
    <body>


<div class="menubar">

    <a href="?link=000">Home</a>
<!-- fee -->
  <a href="?link=0FEE">Fee Structure</a> 

  <!-- student view -->
  <a href="?link=0STV">Student View</a> 
    <!-- subject -->

    <div class="dropdown1">

        <button class="dropbtn1">Subject Entry and View

            <i class="fa fa-caret-down"></i>

        </button>

        <div class="dropdown-content1">
        <a href="?link=0SUBJE">Subject Entry</a>
        <a href="?link=0SUBJ">Subject View</a>
        </div>
    </div>

    <!-- mark entry -->
    <div class="dropdown1">

        <button class="dropbtn1">Mark Entry and View

            <i class="fa fa-caret-down"></i>

        </button>

        <div class="dropdown-content1">
        <a href="?link=0MARKE">Mark Entry</a>
        <a href="?link=0MARK">Mark View</a>
        </div>
    </div>
    <!-- monthly fee -->
    <div class="dropdown1">

        <button class="dropbtn1">Monthly Fees

            <i class="fa fa-caret-down"></i>

        </button>

        <div class="dropdown-content1">
        <a href="?link=0FEEE">Fee Entry</a>
        <a href="?link=0FEEV">Fee View</a>
        </div>
    </div>
    <!-- alert -->
    <div style="float:right;" title="notification"><?php include('new_add.php'); ?></div>
    
</div>
<?php
          	if (isset($_SESSION['HOUSE_suc'])) {
              //echo "<span class='alert alert-success'>".$success."</span>";
             echo '<div class = "alert alert-success alert-dismissable">
                 <button type = "button" class = "close" data-dismiss = "alert" aria-hidden = "true">
                 &times;
                 </button>'.$_SESSION['HOUSE_suc'].'
                 </div>';
             unset($_SESSION['HOUSE_suc']);
             }
        ?>
    </body>
</html>