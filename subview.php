<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subject View</title>

    <style>
        td {
            
            text-align: center;
            padding: 20px 20px 20px 20px;
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
        <?php
          	if (isset($_SESSION['HOUSE_sub'])) {
              //echo "<span class='alert alert-success'>".$success."</span>";
             echo '<div class = "alert alert-success alert-dismissable">
                 <button type = "button" class = "close" data-dismiss = "alert" aria-hidden = "true">
                
                 </button>'.$_SESSION['HOUSE_sub'].'
                 </div>';
             unset($_SESSION['HOUSE_sub']);
             }
        ?>

    <h2>SUBJECT VIEW</h2>

    <table style="text-align:center;margin-left:343px">
    
<tr>
  <td>
  <span style="font-size:20px;">Class:  </span>&nbsp;<select id="classname">
    <option value="all">All</option>
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
  <button class="btn btn-info" onClick="viewStudents();">View</button>
  </td>
  </tr>
 </table>
 <br>
 <div id="viewdetails">
   
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