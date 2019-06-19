<!DOCTYPE html>

<html>



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



.menubar a:hover, .dropdown1:hover .dropbtn1 {

background-color: blue;

}



.dropdown-content1 {

display: none;

position: absolute;

background-color: #f9f9f9;

min-width: 160px;

box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);

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

.alert:hover
{
}
</style>



<div class="menubar">

<a href="?link=000">Home</a>

<div class="dropdown1">

<button class="dropbtn1">Fee Structure 

<i class="fa fa-caret-down"></i>

</button>

<div class="dropdown-content1">

<!-- links -->

</div> 
</div>

<!-- alert -->
<div style="float:right;"><?php include('new_add.php'); ?></div>
<a  href="logout.php" style="float:right" ><i class="fa fa-sign-out fa-fw"></i></a>
</div>









