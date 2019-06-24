        <?php
        date_default_timezone_set("Asia/Kolkata");
        $month = date('m');
        ?>
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
                    width: 150px;
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



        <body>


            <?php
            if (isset($_SESSION['HOUSE_suc'])) {
                //echo "<span class='alert alert-success'>".$success."</span>";
                echo '<div class = "alert alert-success alert-dismissable">
                 <button type = "button" class = "close" data-dismiss = "alert" aria-hidden = "true">
                 &times;
                 </button>' . $_SESSION['HOUSE_suc'] . '
                 </div>';
                unset($_SESSION['HOUSE_suc']);
            }
            ?>

            <h2 style="margin-bottom:20px;">FEE VIEW</h2>



            <table style="text-align:center;margin-left:300px">

                <tr>
                    <td>
                        <span style="font-size:20px;">Session: </span>&nbsp;<select name="session" id="session">
                            <option value="">--Select--</option>
                            <?php
                            include "dbConfig.php";
                            $sql = mysqli_query($con, "select distinct session from admin order by id");
                            while ($data = mysqli_fetch_assoc($sql)) {
                                ?>
                                <option value="<?php echo $data['session'] ?>"><?php echo $data['session'] ?></option>
                            <?php } ?>
                        </select>
                    </td>
                    <td>
                        <span style="font-size:20px;">Class: </span>&nbsp;<select name="class" id="classn">
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

                        <span style="font-size:20px;">View by: </span>&nbsp;
                        <select name="" id="viewbb">
                            <option value="">--Select--</option>
                            <option value="student">Student</option>
                            <option value="month">Month</option>
                        </select>
                        <button class="btn btn-info" onclick="views();">View</button>
                    </td>
                    <td>
                        <div id="viewdet">

                        </div>
                    </td>






                </tr>
            </table>
            <div id="viewdetails">
                <table border="2px" height="100" width="50%" align="center" style="text-align:center">
                    <?php
                    $sql = mysqli_query($con, "select * from admin where month='$month'");
                    ?>
                    <tr>
                        <th style=" text-align: center ">Serial No</th>
                        <th style=" text-align: center ">Student Name</th>
                        <th style=" text-align: center ">Current Month</th>
                    </tr><br>
                    <?php
                    $i = 0;
                    while ($dta = mysqli_fetch_assoc($sql)) {
                        ?>
                        <tr>
                            <td><?php echo ++$i ?></td>
                            <td><?php echo   $dta['name'] ?></td>

                            <td>
                                <?php echo   $dta['month'] ?>
                            </td>

                        </tr>
                    <?php
                } ?>
                </table>
            </div>

            <div style=" margin-bottom:100px ">





                <!-- class based subject -->
                <script>
                    function views() {
                        var classn = document.getElementById('classn').value;
                        var session = document.getElementById('session').value;
                        var viewbb = document.getElementById('viewbb').value;
                        var combo = classn + '^' + session;
                        console.log(combo);
                        var httpx;


                        if (window.XMLHttpRequest) {
                            httpx = new XMLHttpRequest();

                        } else {
                            httpx = new ActiveXObject("Microsoft.XMLHTTP ");

                        }
                        if (viewbb == 'student') {

                            httpx.open("GET", "feeviewby1_Ajax.php?carrylink=" + combo, true); //ajax engine send an asynchronous call to the server via dis_ajax.php with state_id
                            httpx.onreadystatechange = function() {
                                if (httpx.readyState == 4 && httpx.status == 200) {
                                    console.log(viewbb)
                                    document.getElementById("viewdetails").innerHTML = httpx.responseText; //place the data in the specified position i.e., in table data dist 

                                }

                            }
                            httpx.send(null);
                        } else {

                            httpx.open("GET", "feeviewby2_Ajax.php?carrylink=" + combo, true); //ajax engine send an asynchronous call to the server via dis_ajax.php with state_id   
                            httpx.onreadystatechange = function() {
                                if (httpx.readyState == 4 && httpx.status == 200) {
                                    console.log(viewbb)
                                    document.getElementById("viewdet").innerHTML = httpx.responseText; //place the data in the specified position i.e., in table data dist 

                                }

                            }
                            httpx.send(null);
                        }
                    }

                    function monview() {
                        var classn = document.getElementById('classn').value;
                        var session = document.getElementById('session').value;
                        var month = document.getElementById('month').value;
                        var combo = classn + '^' + session + '^' + month;
                        console.log(combo)
                        var httpx;


                        if (window.XMLHttpRequest) {
                            httpx = new XMLHttpRequest();

                        } else {
                            httpx = new ActiveXObject("Microsoft.XMLHTTP ");

                        }
                        httpx.open("GET", "monview_Ajax.php?carrylink=" + combo, true); //ajax engine send an asynchronous call to the server via dis_ajax.php with state_id
                        httpx.onreadystatechange = function() {
                            if (httpx.readyState == 4 && httpx.status == 200) {

                                document.getElementById("viewdetails").innerHTML = httpx.responseText; //place the data in 

                            }

                        }
                        httpx.send(null);



                    }
                </script>
        </body>


        </html>