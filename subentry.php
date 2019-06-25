<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <style>
        /* table  */
        label {

            width: 200px;
            float: left;
            padding: 20px 20px 20px 20px;
            font-size: 15px;
        }

        input {

            float: center;
            width: 250px;
            height: 5px;
            border-radius: 4px;
            padding: 20px 20px 20px 20px;
        }


        h2 {
            text-align: center;
            margin-bottom: 40px;
        }

        select {
            width: 80px;
            height: 40px;
            border-radius: 4px;

        }

        td {
            padding: 20px 20px 20px 20px;
        }

        th {
            font-size: 20px;
            padding: 20px 20px 20px 20px;
        }
    </style>




</head>

<!-- add muliple column row -->


<body>

    <script type="text/javascript">
        function addrow() {
            var table = document.getElementById("mytable");
            var rowno = parseInt(document.getElementById("norows").value);
            var erow = parseInt(document.getElementById("totalrow").value);
            for (var i = 1; i <= rowno; i++) {
                var trow = erow + i;
                var row = table.insertRow(trow);
                var cell1 = row.insertCell(0);
                var cell2 = row.insertCell(1);

                cell1.innerHTML = '<input type="text" name="subname[]" placeholder="Subject Name">';
                cell2.innerHTML = '<input type="text" name="subcode[]" placeholder="Subject Code">';
            }
            document.getElementById("totalrow").value = trow;
        }
    </script>

    <h2>SUBJECT ENTRY</h2>


    <form action="subjectaction.php" method="post" style="margin-top:30px;">

        <!-- add row column -->
        <input type="hidden" name="totalrow" id="totalrow" value="1" />
        <table style="text-align:center;margin-left:330px;float:left;margin-right:200px">
            <tr>
                <td>
                    Add&nbsp; <input type="text" id="norows" maxlength="3" style="width:60px; text-align:center;" value="1" onfocus="this.select();" />&nbsp; Row(s)
                    &nbsp;<button type="button" style="border-radius:30px;" class="btn btn-info btn-sm" onclick="addrow();">Go</button>
                </td>
            </tr>
        </table>
        <!-- end -->
        <table style="text-align:center;margin-left:500px">

            <tr>
                <td>
                    <span style="font-size:20px;">Class: </span>&nbsp;<select name="class" id="classname">
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
            </tr>
        </table>

        <table border="2px" height="100" width="50%" align="center" style="text-align:center" id="mytable">
            <tr>
                <th style="text-align:center">Subject Name</th>
                <th style="text-align:center">Subject Code</th>
            </tr><br>
            <tr>
                <td><input type="text" name="subname[]" placeholder="Subject Name"></td>
                <td><input type="text" name="subcode[]" placeholder="Subject Code"></td>
            </tr>
        </table><br>
        <button class="btn btn-dark" style="margin-left:630px;height:40px;width:80px;">Add</button>
        <div style="margin-bottom:100px">
    </form>



</body>

</html>