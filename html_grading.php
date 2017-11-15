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

.sidenav a {
    padding: 6px 6px 6px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
}


#first {
  background-color:white;
  width:300px;
  float:left;
  margin-left : 400px;
}
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


<p class = "test">Find the list of assignments and list of pending assignemnts below. To submit the assignment, click on the assignment name you want to submit.</p><br><br><br>

<script>
function myFunction() {
    var table = document.getElementById("myTable");
    var row = table.insertRow(0);
    var cell1 = row.insertCell(0);
     var cell2 = row.insertCell(1);
    cell1.innerHTML = "Assignment #";
    cell2.innerHTML = "Assignment #";
}
</script>

<div id = "first">

  <table id="myTable">
  <tr>
	<th> Assignments List </th>
	<th> Assignments Due </th>
  </tr>
  <tr>
    <td>Assignment 1</td>
    <td><a id="aparna" href="#">Assignment 3</a></td>
  </tr>
  <tr>
    <td>Assignment 2</td>
  </tr>
  <tr>
    <td>Assignment 3</td>
  </tr>
</table>
<br>

<div id="foo">
<form action="upload2.php" method="post" enctype="multipart/form-data">
<p>Select html page to upload:</p>
    <input type="file" name="Filename" id="fileToUpload">
<br/><br/>
    <input type="submit" value="Upload File" name="submit">
</form>

</div>

</div>

</div>
</div>
