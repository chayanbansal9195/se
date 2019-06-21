<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subject View</title>

    <style>
        td {
            border: none;
            text-align: center;
        }
        

        h2 {
            text-align: center;
            margin-bottom: 40px;
        }
        select{
            width: 70px;
            height: 40px;
            border-radius: 4px;
            
        }
    </style>

</head>

<body>
    <h2>SUBJECT VIEW</h2>

    <table style="text-align:center;margin-left:343px">
    
<tr>
  <td>
  <span style="font-size:20px;">Class:  </span>&nbsp;<select id="classname">
    <option value="all">all</option>
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
  <button class="btn" onClick="viewStudents();">View</button>
  </td>
  </tr>
 </table>
 <br>
 <div id="viewdetails">
    <table border="2px" height="100" width="50%" align="center" style="text-align:center">
        <tr>
        <th style="text-align:center">Serial No</th>
            <th style="text-align:center">Subject Name</th>
            <th style="text-align:center">Subject Code</th>
        </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
    </table>
 </div>
<script>
    function viewStudents(){
  var className=document.getElementById('classname').value;
    //console.log(a);
    var httpx;


    if(window.XMLHttpRequest){
      httpx=new XMLHttpRequest();

    }
    else{
      httpx=new ActiveXObject("Microsoft.XMLHTTP");

    }
    
       httpx.open("GET","subview_Ajax.php?carrylink="+className,true);//ajax engine send an asynchronous call to the server via dis_ajax.php with state_id
       httpx.onreadystatechange=function(){
        if(httpx.readyState==4 && httpx.status==200){

        document.getElementById("viewdetails").innerHTML=httpx.responseText;//place the data in the specified position i.e., in table data dist 
        datatable()

      }

    } 
    httpx.send(null);
    


}
</script>


</body>
</html>