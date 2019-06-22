<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <style>
        /* table  */


        input {

            float: center;
            width: 250px;
            height: 7px;
            border-radius: 4px;
            padding: 15px 15px 15px 15px;
            font-size: 17px;
        }


        h2 {
            text-align: center;
            margin-bottom: 40px;
        }

        select {
            width: 90px;
            height: 40px;
            border-radius: 4px;

        }

        td {
            padding: 10px 10px 10px 10px;
        }

        th {
            font-size: 20px;
            padding: 10px 10px 10px 10px;
        }
    </style>




</head>

<!-- add muliple column row -->


<body>

    <h2 style="margin-bottom:20px;">MARK ENTRY</h2>

<form action="marksaction.php" method="post" style="margin-top:30px;">

    <table style="text-align:center;margin-left:300px">

        <tr>
            <td>
                <span style="font-size:20px;">Class: </span>&nbsp;<select onchange="viewsub();" name="class" id="classname">
                <option value="">--Select--</option> 
                <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>

                </select>


            </td>

            
                <td>

                    <?php
                    include "dbConfig.php";

                    $sql = mysqli_query($con, "select * from subject");



                    ?>
                    <div id="viewdetails">
                        <span style="font-size:20px;">Subject: </span>&nbsp;

                        <select name="subname" id="subject">
                            <option value="">--Select--</option>
                        </select>

                    </div>
                </td>

                <td>
                    <span style="font-size:20px;">Exam: </span>&nbsp;<select name="exam">
                        <option value="unit test 1">unit test 1</option>
                        <option value="unit test 2">unit test 2</option>
                        <option value="unit test 3">unit test 3</option>
                        <option value="unit test 4">unit test 4</option>
                        <option value="half yearly">half yearly</option>
                        <option value="annual">annual</option>

                    </select>
                    <button type="button" class="btn btn-info" onClick="viewstu();">View</button>
                </td>
        </tr>
    </table>
    <!-- student list -->
    <div id="viewdet">
        
    </div>
    
    <div style="margin-bottom:100px">
        </form>




        <!-- class based subject -->
        <script>
            function viewsub() {
                var className = document.getElementById('classname').value;
                //console.log(a);
                var httpx;


                if (window.XMLHttpRequest) {
                    httpx = new XMLHttpRequest();

                } else {
                    httpx = new ActiveXObject("Microsoft.XMLHTTP");

                }

                httpx.open("GET", "subselect_Ajax.php?carrylink=" + className, true); //ajax engine send an asynchronous call to the server via dis_ajax.php with state_id
                httpx.onreadystatechange = function() {
                    if (httpx.readyState == 4 && httpx.status == 200) {

                        document.getElementById("viewdetails").innerHTML = httpx.responseText; //place the data in the specified position i.e., in table data dist 

                    }

                }
                httpx.send(null);



            }

            // view students
            function viewstu() {
                var className = document.getElementById('classname').value;
                var sub = document.getElementById('sub').value;

                var combo = className + '^' + sub;
                
                //console.log(a);
                var httpx;


                if (window.XMLHttpRequest) {
                    httpx = new XMLHttpRequest();

                } else {
                    httpx = new ActiveXObject("Microsoft.XMLHTTP");

                }

                httpx.open("GET", "stulist_Ajax.php?carrylink=" + combo, true); //ajax engine send an asynchronous call to the server via dis_ajax.php with state_id
                httpx.onreadystatechange = function() {
                    if (httpx.readyState == 4 && httpx.status == 200) {

                        document.getElementById("viewdet").innerHTML = httpx.responseText; //place the data in the specified position i.e., in table data dist 

                    }

                }
                httpx.send(null);



            }
        </script>


</body>

</html>