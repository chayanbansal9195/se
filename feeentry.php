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

<!-- add muliple column row -->
<?php
include('dbConfig.php');
$sql = mysqli_query($con, "select distinct session from admin ");

?>

<body>

    <h2 style="margin-bottom:20px;">FEE ENTRY</h2>



    <table style="text-align:center;margin-left:300px">

        <tr>
             <td>
                
                        <span style="font-size:20px;">Session: </span>&nbsp;
    <select name="session" id="classname" onChange="viewstu();">
    <option value="">--Select--</option> 
        <?php while ($data = mysqli_fetch_assoc($sql)) { ?>
            <option value="<?php echo $data['session'] ?>">
                <?php echo $data['session'] ?>
            </option>
            
        <?php } ?>
    </select>
                </td>
            
            <td>
                <div id="viewdet">
                <span style="font-size:20px;">Class: </span>&nbsp;<select  name="class" id="classn">
                    <option value="">--Select--</option>

                </select>
                <button class="btn btn-info" onclick="views();">View</button>
            </td>
               
               
            </div>
        </tr>
    </table>
    <!-- student list -->
    <div id="viewdetails">

    </div>

    <div style="margin-bottom:100px">





        <!-- class based subject -->
        <script>
            function viewstu() {
                var className = document.getElementById('classname').value;
                //console.log(a);
                var httpx;


                if (window.XMLHttpRequest) {
                    httpx = new XMLHttpRequest();

                } else {
                    httpx = new ActiveXObject("Microsoft.XMLHTTP");

                }

                httpx.open("GET", "feesession_Ajax.php?carrylink=" + className, true); //ajax engine send an asynchronous call to the server via dis_ajax.php with state_id
                httpx.onreadystatechange = function() {
                    if (httpx.readyState == 4 && httpx.status == 200) {

                        document.getElementById("viewdet").innerHTML = httpx.responseText; //place the data in the specified position i.e., in table data dist 

                    }

                }
                httpx.send(null);



            }

            function views() {
                var classN = document.getElementById('classn').value;
                //console.log(a);
                var httpx;


                if (window.XMLHttpRequest) {
                    httpx = new XMLHttpRequest();

                } else {
                    httpx = new ActiveXObject("Microsoft.XMLHTTP");

                }

                httpx.open("GET", "feelist_Ajax.php?carrylink=" + classN, true); //ajax engine send an asynchronous call to the server via dis_ajax.php with state_id
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