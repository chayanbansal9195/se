<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student View</title>

    <style>
        td {

            text-align: center;
            padding: 20px 20px 20px 20px;
        }


        h2 {
            text-align: center;
            margin-bottom: 40px;
        }

        select {
            width: 70px;
            height: 40px;
            border-radius: 4px;

        }
    </style>

</head>

<body>

    <h2>STUDENT VIEW</h2>

    <table style="text-align:center;margin-left:343px">

        <tr>
            <td>
                <span style="font-size:20px;">Session: </span>&nbsp;<select id="session">

                    <?php
                    include "dbConfig.php";
                    $sql = mysqli_query($con, "select distinct session from admin order by id");
                    while ($data = mysqli_fetch_assoc($sql)) {
                        ?>
                        <option value="<?php echo $data['session'] ?>"><?php echo $data['session'] ?></option>
                    <?php } ?>
            </td>
            <td>
                <span style="font-size:20px;">Class: </span>&nbsp;<select id="classname">
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
                <button class="btn btn-info" onclick="views();">View</button>
            </td>
        </tr>
    </table>
    <br>
    <div id="viewdetails">

    </div>
    <div style="margin-bottom:100px;"></div>
    <script>
        function views() {
            var classn = document.getElementById('classname').value;
            var session = document.getElementById('session').value;
            var combo = classn + '^' + session;
            console.log(combo);
            var httpx;


            if (window.XMLHttpRequest) {
                httpx = new XMLHttpRequest();

            } else {
                httpx = new ActiveXObject("Microsoft.XMLHTTP");

            }

            httpx.open("GET", "studentview_Ajax.php?carrylink=" + combo, true); //ajax engine send an asynchronous call to the server via dis_ajax.php with state_id
            httpx.onreadystatechange = function() {
                if (httpx.readyState == 4 && httpx.status == 200) {

                    document.getElementById("viewdetails").innerHTML = httpx.responseText; //place the data in the specified position i.e., in table data dist 


                }

            }
            httpx.send(null);



        }

        // check box for section
        function changeve(n) {

            var chcknme = document.getElementById('chck' + n).checked;
            console.log(chcknme);
            if (chcknme) {
                document.getElementById('section' + n).disabled = false;
            } else {
                document.getElementById('section' + n).disabled = true;
            }
        }
    </script>


</body>

</html>