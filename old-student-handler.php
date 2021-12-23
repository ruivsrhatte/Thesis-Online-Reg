<?php

require_once("db.php");
session_start();
if (isset($_POST['enroll'])) {

    $sem = mysqli_real_escape_string($con, trim($_POST['sem']));
    $stdNumber = mysqli_real_escape_string($con, trim($_POST['stdNumber']));

    $sql = mysqli_query($con, "SELECT StdNumber, Sem FROM student WHERE (Sem = '$sem' AND StdNumber='$stdNumber')") or die("<b>Error:</b> Something wnet wrong<br/>" . mysqli_error($con));
    $count = mysqli_num_rows($sql);

    if ($count > 0) {
        $fetch = mysqli_fetch_assoc($sql);
     if ($fetch["StdNumber"] == $stdNumber && $fetch["Sem"] ==  $sem) {  
            $_SESSION['exist'] = "It seems like you are You are already enrolled to a new semester.";
            header("Location: registered.php");
        }
    } else {
        $stdNumber = mysqli_real_escape_string($con, trim($_POST['stdNumber']));
        $stdNumber = $_POST['stdNumber'];
        $scholarship = $_POST['scholarship'];
        $contactNumber = $_POST['contactNumber'];
        $sy = $_POST['sy'];
        $sem = mysqli_real_escape_string($con, trim($_POST['sem']));
        $yearLevel = $_POST['yearLevel'];
        $block = $_POST['block'];
        $course = $_POST['course'];
        $dateOfReg = date('Y-m-d', strtotime($_POST['dateOfReg']));

        $query = mysqli_query($con, "UPDATE `student` 
            SET Scholarship='$scholarship',
            ContactNumber='$contactNumber',
            SY='$sy',
            Sem='$sem',
            YearLevel='$yearLevel',
            Block='$block',
            Course='$course',
            DateOfReg='$dateOfReg'
            WHERE StdNumber='$stdNumber'")
            or die("<b>Error:</b> Something went wrong.<br/>" . mysqli_error($con));
        if (isset($query)) {
           
         
            $_SESSION['status'] = "Successfully Enrolled";
            header("Location: registered.php");
        }
    }
}
