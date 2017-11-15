<?php
// HTML Grading Team:
// Please do not modify this page
// Begin your work on html_grading.php
?>

<?php

$belowRoot = true;
$isLoggedIn = true;
$isTeacher = false;
$isStudent = true;
$displayClass=true; //display the class name after the prof selects section from dropdown
$showNav = true; //don't display navigation if teacher hasn't selected class from drowpdown

$thisPage = "HTML Grading";

include '../../header.php';
?>


<?php 
include 'html_grading.php';

include '../../footer.php';

?>
