<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#aparna").click(function(){
        $("#foo").toggle();
    });
});
</script>
<style>
body {
    font-family: "Lato", sans-serif;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}


.logo
{
	width: 80%;
	z-index: 1;
	left: 0;
	top: 0;
	overflow-x: hidden;

}



.sidenav {
    height: 100%;
    width: 250px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color:  #023F80;
    overflow-x: hidden;
    padding-top: 20px;
}

/*.sidenav a {
    padding: 6px 6px 6px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
}
*/
.sidenav a:hover {
    color: #f1f1f1;
}

.main {
    margin-left: 200px; /* Same as the width of the sidenav */
	background-color: red;
}



#header {
    min-height:100px;
    background:  #023F80;
	top: 0;
    left: 0;
	padding-top: 20px;

}

#wrapper {
  width:700px;
}
/*#first {
  background-color:white;
  width:300px;
  float:left;
  margin-left : 400px;
}
*/
#second {
  background-color:white;
  width:300px;
  float:middle;
  margin-left : 800px;
}
#top{
	margin-top:  1000 px;

}


p.test {
    width: 40em;
    border: 1px solid #000000;
    word-wrap: break-word;
	margin-left : 350px;
}


p.test1 {
    width: 40em;
    border: 1px solid #000000;
    word-wrap: break-word;
	margin-left : 350px;
	margin-top : 300px;
}


@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>
<img></img>

<p class = "test">Find the list of assignments and list of pending assignemnts below. To submit the assignment, click on the assignment name you want to submit.</p><br><br><br>

<script>
function myFunction() {
    var table = document.getElementById("myTable");
    var row = table.insertRow(0);
    var cell1 = row.insertCell(0);
     var cell2 = row.insertCell(1);
    cell1.innerHTML = "NEW CELL1";
    cell2.innerHTML = "NEW CELL2";
}

function myGrade(){
  var totalmarks=100;
  var str = $("body").html();
  var n = str.match(/<+[^/]/g);
  var z = str.match(/<+['/]/g);
  n = n.length;
  z = z.length;
  var xyz;
  var total_valid_open=Math.abs(n);
 alert(total_valid_open);
  if(total_valid_open==z){
  xyz="Marks obtained:"+totalmarks;
  $("#demo").append(xyz);
  }
  else if(total_valid_open!=z){
    var x = Math.abs(total_valid_open-z);
    var total=x*2;
    totalmarks=totalmarks-total;
   xyz="You had "+ x +" number of mismatch tags. So you get: "+ totalmarks +" marks";
     $("#demo").append(xyz);
  }
}
</script>

<div id = "first">

  <table id="myTable">
  <tr>
	<th> Assignments List </th>
  </tr>
  <tr>
    <td><a id="aparna" href="#">Assignment 1</a></td>
  </tr>
  <tr>
    <td><a id="aparna" href="#">Assignment 2</a></td>
  </tr>
  <tr>
    <td><a id="aparna" href="#">Assignment 3</a></td>
  </tr>
</table>
<br>
<button onclick="myGrade()">Grade</button>
<p id="demo"></p>
</div>


</div>
</div>

</body>

</html>
