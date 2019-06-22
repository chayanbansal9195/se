<?php
date_default_timezone_set("Asia/Kolkata");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <title>Student Register</title>
    <style>
        .menubar {

            overflow: hidden;

            background-color: #75AAEE;

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

        /* table  */
        label {
            
            width: 200px;
            float:left;
            padding: 20px 20px 20px 20px;
            font-size:15px;
        }

        input {
           
            float: left;
            width: 250px;
            height: 5px;
            border-radius: 4px;
            padding: 20px 20px 20px 20px;
        }
        h3{
            padding: 20px 20px 20px 20px;
        }
        select{
            width: 250px;
            height: 40px;
            border-radius: 4px;
            
        }
        body{
            background-image: url('images/bg1.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
             height: 100%;
        }
        a {
    
    color: #5B90D5;
}
hr {
    border:0.5px solid black;
}


    </style>


</head>

<body>
    <table>
        <tr>
            <td width="15%" height="100" align="center" style="font-size:32px;margin-top:100px;"><a style="text-decoration: none;" href="index.php">Student Enrollment Desk</a> </td>
        </tr>
    </table>

    <div class="menubar">

        <a href="index.php">Admin Login</a>

    </div>

    <!-- student form -->

    <form action="studentaction.php" method="post" style="margin-top:30px;">
        <table align="center" style="text-align: left;border-collapse: collapse;width: 80%;">
            <tr>
                <td>
                    <h3>Personal Details:</h3><hr>
                </td>
                 
            </tr>
            <tr>
                <td><label for="">Name<span style="color:red">*</span></label>
                    <input type="text" name="name" placeholder="Enter Your Name" required></td>
                   
                   
                    
            </tr>
            <tr>
            <td><label for="">Father Name<span style="color:red">*</span></label>
                    <input type="text" name="fname" placeholder="Father Name" required></td>
                <td>
                    <label for="">Mother Name<span style="color:red">*</span></label>
                    <input type="text" name="mname" placeholder="Mother Name" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Phone Number<span style="color:red">*</span></label>
                    <input type="number" name="phno" placeholder="Phone Number" required>
                </td>
                <td>
                    <label for="">Alternate Number</label>
                    <input type="number" name="aphno" placeholder="Alternate Number">
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Address:</h3><hr>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Landmark<span style="color:red">*</span></label>
                    <input type="text" name="landmark" placeholder="Landmark" required>
                </td>
                <td>
                    <label for="">City/Village<span style="color:red">*</span></label>
                    <input type="text" name="city" placeholder="City/Village" required>
                </td>
            </tr>
            
            <tr>
                <td>
                    <label for="">Police Station<span style="color:red">*</span></label>
                    <input type="text" name="pstation" placeholder="Police Station" required>
                </td>
                <td>
                    <label for="">Post Office<span style="color:red">*</span></label>
                    <input type="text" name="postoffice" placeholder="Post Office" required>
                </td>
            </tr>
            
            <tr>
                <td>
                    <label for="">State<span style="color:red">*</span></label>
                    <?php
                    include "dbConfig.php";

                    $sql = mysqli_query($con, "select * from state");



                    ?>
                    <select onchange="viewdistrict();" name="state" id="states">
                        <?php while ($data = mysqli_fetch_assoc($sql)) { ?>
                            <option value="<?php echo $data['statename'] ?>">
                                <?php echo $data['statename'] ?>
                            </option>
                        <?php } ?>
                    </select>
                </td>
                <td>
                    <?php
                    include "dbConfig.php";

                    $sql = mysqli_query($con, "select * from district");



                    ?>
                    <div id="viewdetails">
                        <label for="">District<span style="color:red">*</span></label>
                        <select name="district" id="district">
                            <?php while ($data = mysqli_fetch_assoc($sql)) { ?>
                                <option value="<?php echo $data['districtname'] ?>">
                                    <?php echo $data['districtname'] ?>
                                </option>
                            <?php } ?>
                        </select>

                </td>
                </div>
            </tr>

            
            
            <tr>
                <td>
                    <h3>Educational Details:</h3><hr>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="">Last Examination<span style="color:red">*</span></label>
                    <input type="text" name="lexam" placeholder="Last Examination" required>
                </td>
                <td>
                    <label for="">Last School Name<span style="color:red">*</span></label>
                    <input type="text" name="lschool" placeholder="Last School Name" required>
                </td>
            </tr>
            
            <tr>
                <td>
                    <label for="">Marks Secured<span style="color:red">*</span></label>
                    <input type="text" name="msecured" placeholder="Marks Secured" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">New Class<span style="color:red">*</span></label>
                    <input type="text" name="newclass" placeholder="Applied for" required>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Other Details:</h3><hr>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Religion<span style="color:red">*</span></label>
                    <input type="text" name="religion" placeholder="Religion" required>
                </td>
                <td>
                    <label for="">Caste<span style="color:red">*</span></label>
                    <input type="text" name="caste" placeholder="Caste" required>
                </td>
            </tr>
            
            <tr>
                <td>
                    <label for="">Gender<span style="color:red">*</span></label>
                    <select name="gender" id="">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </td>
            </tr>


            <!--other parts  -->
            <tr>
                <td>
                    <?php $today = date("F/j/Y "); ?>
                    <input type="hidden" name="date" value="<?php echo $today ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <?php $today = date("h:m "); ?>
                    <input type="hidden" name="time" value="<?php echo $today ?>">
                </td>
            </tr><br>
            <tr>
                <td>
                <button type="submit" class="btn btn-success" style="margin-left:500px;width:100px;height:40px;font-size:15px;padding:10px 10px 10px 10px">Enroll</button>
                <div style="margin-bottom:100px">
                </td>
            </tr>
            




        </table>

    </form>


    <!-- script -->
    <script>
        function viewdistrict() {
            var className = document.getElementById('states').value;
            var httpx;

            if (window.XMLHttpRequest) {
                httpx = new XMLHttpRequest();

            } else {
                httpx = new ActiveXObject("Microsoft.XMLHTTP");

            }

            httpx.open("GET", "districtAjax.php?carrylink=" + className, true); //ajax engine send an asynchronous call to the server via dis_ajax.php with state_id
            httpx.onreadystatechange = function() {
                if (httpx.readyState == 4 && httpx.status == 200) {

                    document.getElementById("viewdetails").innerHTML = httpx.responseText; //place the data in the specified position i.e., in table data dist 



                }

            }
            httpx.send(null);

        }
    </script>

</body>

</html>