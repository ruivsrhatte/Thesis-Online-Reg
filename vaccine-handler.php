<?php
session_start();
require_once "db.php";


if (isset($_POST['enroll'])) {
    if (is_uploaded_file($_FILES['vacsImage']['tmp_name'])) {
        //VACCINE
        $vaccine = $_POST['vaccine'];
        //$vacsImage = addslashes(file_get_contents($_FILES['vacsImage']['tmp_name']));

        //$vaccine = addslashes(file_get_contents($_FILES['vacsImage']['tmp_name']));
        //$vaccinated = $_FILES['vacsImage']['tmp_name'] == 0 && $_FILES['vacsImage']['error'] == 0 ? $imgData : $vaccinated;

        //function vacsCard1()
        //{
        $idPic =  $_SESSION['imgData'];
        $vaccinated = addslashes(file_get_contents($_FILES['vacsImage']['tmp_name']));
        $notVaccinated = $idPic;
        $vacsCardImage = $_FILES['vacsImage']['tmp_name'] != 0 && $_FILES['vacsImage']['error'] != 0 ? $notVaccinated : $vaccinated;

       // }
        function vacsCard()
        {
            if ($_FILES['vacsImage']['tmp_name'] == 0 && $_FILES['vacsImage']['error'] == 0) {
                $con = mysqli_connect('localhost', 'root', '', 'studentdb');
                $stdNumber = $_SESSION['stdNumber'];
                $sql = "UPDATE student
                            SET Vaccination_Card =  (
                                SELECT * FROM `default_image` 
                                WHERE default_image.id = 1 && student.StdNumber = '$stdNumber'
                            )";
                mysqli_query($con, $sql) or die("<b>Error:</b> Error on Inserting Data<br/>" . mysqli_error($con));
            } else {
                if (is_uploaded_file($_FILES['vacsImage']['tmp_name'])) {
                    addslashes(file_get_contents($_FILES['vacsImage']['tmp_name']));
                }
            }
        }

        //$vacsCardImage = vacsCard();
        
        $stdNumber = $_SESSION['stdNumber'];
        $email = $_SESSION['email'];
        $scholarship = $_SESSION['scholarship'];
        $lname = $_SESSION['lname'];
        $fname = $_SESSION['fname'];
        $mname = $_SESSION['mname'];
        $contactNumber = $_SESSION['contactNumber'];
        $sy = $_SESSION['sy'];
        $sem = $_SESSION['sem'];
        $yearLevel = $_SESSION['yearLevel'];
        $course = $_SESSION['course'];
        $dateOfReg = date('Y-m-d', strtotime($_SESSION['dateOfReg']));

        //$vacsCardImage = vacsCard();
        $sql = "UPDATE student SET `Vaccine`='$vaccine ', `Vaccination_Card`='$vacsCardImage' WHERE `StdNumber`='$stdNumber'";
        $execute = mysqli_query($con, $sql) or die("<b>Error:</b> Error on Inserting Data<br/>" . mysqli_error($con));
        if (isset($execute)) {
            //$_SESSION['status'] = "Registered";

            $_SESSION['imgData'] = $imgData;
            $_SESSION['stdNumber'] = $stdNumber;
            $_SESSION['email'] = $email;
            $_SESSION['scholarship'] = $scholarship;
            $_SESSION['lname'] = $lname;
            $_SESSION['fname'] = $fname;
            $_SESSION['mname'] = $mname;
            $_SESSION['contactNumber'] = $contactNumber;
            $_SESSION['sy'] = $sy;
            $_SESSION['sem'] = $sem;
            $_SESSION['yearLevel'] = $yearLevel;
            $_SESSION['block'] = $block;
            $_SESSION['course'] = $course;
            $_SESSION['dateOfReg'] = $dateOfReg;
            //header("Location: reference-number.php");
            header("Location: qr-code-to-gen.php");
            //header("Location: vaccine.php");
            echo "Uploaded";
        }
    }
}
?>
