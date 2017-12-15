<?php

 $activePage = 'html';
 $isInstructor = false;

?>
<html>
<head>
  <title>HTML- Submit</title>
  <link rel="stylesheet" type="text/css" href="../../stylesheets/main.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <?php
  include('../../header.php');
  include('../../mobile-nav.php');
?>
<div class="main-page">
 <?php
       include("../../navigation.php");
      ?>
<div class="main-content">
<center>
<div id="foo">
<form action="upload2.php" method="post" enctype="multipart/form-data">
    <h2> Assignment Name: </h2> <input type="text" name="assignmentTitlename" id="assignmentTitle">

<h2>Select html page to upload:</h2>
    <input type="file" name="Filename" id="fileToUpload">
<br/><br/>
    <input type="submit" value="Upload File" name="submit">
</form>
</div>
</center>
</div>
</div>
</body>
</html>
<?php
include('../../footer.php');
 ?>
