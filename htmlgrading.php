<?php
include('../../config.php');
?>

<html>

<body>

<div class="main-container">
<center>
   <div class="all-updates">
        <!-- ADD A NEW ASSIGNMENT -->
            <h1 id="add-h1">Assignments</h1>
                <?php
                        //$conn = new mysqli("localhost","root","", "Red-Velvet");
                        if(!$conn) {echo "error";}
                        $latestPostSQL ="SELECT * from html_assignment LIMIT 1";
                        $result = $conn->query($latestPostSQL);
                        if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                        echo "<div class='current-update'><h2>" . $row["assignmentTitle"] . "</h2>" . "<span class='bold-text'>Due Date: " . $row["html_submission_date"] . "<br><br><a href='htmlgrading2.php'>Submit Assignment</a></div>";//" | <a id='toggleGrade'>View Grade</a><br><div class='showGrade'>Grade: 98% <br> Professor Comments: Too much.</div></div>";
                        }
                    } else {
                    echo "";
                        }


                        $earlierPostsSQL="SELECT * FROM html_assignment ORDER BY dueDate DESC LIMIT 10000 OFFSET 1";

                        //combine submission and assignment tables

                        $result = $conn->query($earlierPostsSQL);

                        if ($result->num_rows > 0) {
                            ///output data of each row
                           while($row = $result->fetch_assoc()) {
                             echo "<div class='current-update'><h2>" . $row["assignmentTitle"] . "</h2>" . "<span class='bold-text'>Due Date: " . $row["html_submission_date"] . "<br><br><a href='htmlgrading2.php'>Submit Assignment</a></div>";
                             //echo "<div class='current-update'><h2>" . $row["assignmentTitle"] . "</h2>" . "<span class='bold-text'>Date Submitted: " . $row["html_submission_date"] . "</span><br>Grade: " . $row["html_grade"] . "<br>" . "<br><a href='htmlgrading2.php'>Submit Assignment</a></div>";
                          // echo "<div class='prev-update'><h2>" . $row["assignmentTitle"] . "</h2>" ."<span class='bold-text'>Due Date: " . $row["dueDate"] . "</span><br>Date Posted: " . $row["availableDate"] . $row["assignmentDescription"] . "<br><a href='#'>Submit Assignment</a> | <a id='toggleGrade'>View Grade</a><br><div class='showGrade'>Example Grade: 68% <br> Professor Comments: Not enough.</div></div>";
                           }
                        } else {
                       echo "";
                            }
   ?>

    </div>

</center>
</div>

<script>

    //toggle assignment module
    //toggles all at once, need to change
        $(document).ready(function(){
            $(".showGrade").hide();

            $("#toggleGrade").click(function() {
                $(".showGrade").slideToggle.hide();


            });
        });

    </script>

</body>
</html>


<?php

include('../footer.php');

?>
