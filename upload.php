<?php
$servername = "phpmyadmin.cw74xrxhh0s2.us-east-1.rds.amazonaws.com";
$username = "phpmyadmin";
$password = "CIS101portal-db";
$dbname = "portal-db";

$fileExistsFlag = 0;
//$target = "html";
$file = $_FILES['Filename']['name'];
$fileName = $_FILES['Filename']['name'];
$allowed =  array('gif','png' ,'jpg');
//$ext = pathinfo($fileName, PATHINFO_EXTENSION);
//$file_size = $file ['size'];
//$imageFileType = strtolower(pathinfo($target,PATHINFO_EXTENSION));

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if($fileExistsFlag == 0) {
  $target = "html";
  $fileTarget = $target.$fileName;
  $tempFileName = $_FILES["Filename"]["tmp_name"];
  $result = move_uploaded_file($tempFileName,$fileTarget);
   if($result) {
       //if(!in_array($ext, $allowed){
            $sql = "INSERT INTO html_assignment (assignmentID,studID,studName,assignmentTitle,assignment_file)
            VALUES ('HTML 2','U176248','John Doe','$fileName','$file');";
            if (mysqli_query($conn, $sql)) {
              $abc = "Your file ".$fileName." has been successfully uploaded";
              echo "<script type='text/javascript'>alert('$abc');window.open('index.php','_self',false);</script>";
           } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }

    mysqli_close($conn);
  }
}
  else {
		echo "File <html><b><i>".$fileName."</i></b></html> already exists in your folder. Please rename the file and try again.";
		mysqli_close($conn);
	}
?>
