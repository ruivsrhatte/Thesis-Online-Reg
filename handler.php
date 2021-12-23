<?php
session_start();
require_once "db.php";

//$errors = array();
//$valid = TRUE;
if (isset($_POST['enroll'])) {
    $email = mysqli_real_escape_string($con, trim($_POST['email']));

    $sql = mysqli_query($con, "SELECT StdEmailAdd FROM student WHERE StdEmailAdd = '$email'") or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($con));;
    $count = mysqli_num_rows($sql);

    if ($count > 0) {
        $fetch = mysqli_fetch_assoc($sql);
        if ($fetch["StdEmailAdd"] ==  $email) {
            $_SESSION['exist'] = "It seems like you are already registered";
            header("Location: registered.php");
           echo "Already Exist";
            }
        } else {
           
            //header("Location: login.php");
            if (is_uploaded_file($_FILES['userImage']['tmp_name'])) {
                //PERSONAL INFO
                $imgData = addslashes(file_get_contents($_FILES['userImage']['tmp_name']));
                
                $stdNumber = $_POST['stdNumber'];
                $qrData = addslashes(file_get_contents($_FILES['qrImage']['tmp_name']));
                $email = $_POST['email'];
                $scholarship = $_POST['scholarship'];
                $lname = $_POST['lname'];
                $fname = $_POST['fname'];
                $mname = $_POST['mname'];
                $contactNumber = $_POST['contactNumber'];
                $sy = $_POST['sy'];
                $sem = $_POST['sem'];
                $yearLevel = $_POST['yearLevel'];
                $block = $_POST['block'];
                $course = $_POST['course'];
                $dateOfReg = date('Y-m-d', strtotime($_POST['dateOfReg']));
    
                //OTHER INFORMATION
                $civilStatus = $_POST['civilStatus'];
                $age = $_POST['age'];
                $sex = $_POST['sex'];
                $dateOfBirth = date('Y-m-d', strtotime($_POST['dateOfBirth']));
    
    
                $placeOFBirth = $_POST['placeOFBirth'];
                $nationality = $_POST['nationality'];
                $religion = $_POST['religion'];
    
                $homeHouseNo = $_POST['homeHouseNo'];
                $homeStreet = $_POST['homeStreet'];
                $homeBarangay = $_POST['homeBarangay'];
                $homeTown = $_POST['homeTown'];
                $homeCity = $_POST['homeCity'];
                $homeZipcode = $_POST['homeZipcode'];
    
                $provHouseNo = $_POST['provHouseNo'];
                $provStreet = $_POST['provStreet'];
                $provBarangay = $_POST['provBarangay'];
                $provTown = $_POST['provTown'];
                $provCity = $_POST['provCity'];
                $provZipcode = $_POST['provZipcode'];
    
                //PARENTS/GUARDIAN
                $fathersName = $_POST['fathersName'];
                $fathersOccupation = $_POST['fathersOccupation'];
                $fathersContactNo = $_POST['fathersContact'];
    
                $mothersName = $_POST['mothersName'];
                $mothersOccupation = $_POST['mothersOccupation'];
                $mothersContactNo = $_POST['mothersContact'];
    
                $guardiansName = $_POST['guardiansName'];
                $guardiansOccupation = $_POST['guardiansOccupation'];
                $guardiansContactNo = $_POST['guardiansContact'];
    
                $guardiansHouseNo = $_POST['guardiansHouseNo'];
                $guardiansStreet = $_POST['guardiansStreet'];
                $guardiansBarangay = $_POST['guardiansBarangay'];
                $guardiansTown = $_POST['guardiansTown'];
                $guardiansCity = $_POST['guardiansCity'];
                $guardiansZipcode = $_POST['guardiansZipcode'];
    
                $financialSupport = $_POST['financialSupport'];
                $stdNature = $_POST['stdNature'];
    
                //EDUCATIONAL HISTORY
                $elemName = $_POST['elemName'];
                $elemAddress = $_POST['elemAddress'];
                $elemHonors = $_POST['elemHonors'];
                $elemYear = $_POST['elemYear'];
    
                $jhName = $_POST['jhName'];
                $jhAddress = $_POST['jhAddress'];
                $jhHonors = $_POST['jhHonors'];
                $jhYear = $_POST['jhYear'];
    
                $shName = $_POST['shName'];
                $shAddress = $_POST['shAddress'];
                $shHonors = $_POST['shHonors'];
                $shYear = $_POST['shYear'];
    
                $collegeName = $_POST['collegeName'];
                $collegeAddress = $_POST['collegeAddress'];
                $collegeYear = $_POST['collegeYear'];
    
                $sql = "insert into student(`StdIdPicture`, `StdNumber`, `QR_Code`, `StdEmailAdd`, `Scholarship`, `StdLastName`, `StdFirstName`, `StdMiddleName`, `ContactNumber`, `SY`, `Sem`, `YearLevel`, `Block`, `Course`, `DateOfReg`, `CivilStatus`, `Age`, `Sex`, `DateOfBirth`, `PlaceOfBirth`, `Nationality`, `Religion`, `HomeHouseNo`, `HomeStreet`, `HomeBarangay`, `HomeTown`, `HomeCity`, `HomeZipCode`, `ProvHouseNo`, `ProvStreet`, `ProvBarangay`, `ProvTown`, `ProvCity`, `ProvZipCode`, `FathersName`, `FathersOccupation`, `FathersContactNo`, `MothersName`, `MothersOccupation`, `MothersContactNo`, `GuardiansName`, `GuardiansOccupation`, `GuardiansContactNo`, `GuardiansHouseNo`, `GuardiansStreet`, `GuardiansBarangay`, `GuardiansTown`, `GuardiansCity`, `GuardiansZipCode`, `FinancialSupport`, `StdNature`, `ElemName`, `ElemAddress`, `ElemHonors`, `ElemSY`, `JhName`, `JhAddress`, `JhHonors`, `JhSY`, `ShName`, `ShAddress`, `ShHonors`, `ShSY`, `CollegeName`, `CollegeAddress`, `CollegeSY`) 
                values('" . $imgData . "',
                '" . $stdNumber . "',
                '" . $qrData . "',
                '" . $email . "',
                '" . $scholarship . "',
                '" . $lname . "',
                '" . $fname . "',
                '" . $mname . "',
                '" . $contactNumber . "',
                '" . $sy . "',
                '" . $sem . "',
                '" . $yearLevel . "',
                '" . $block . "',
                '" . $course . "',
                '" . $dateOfReg . "',
        
                '" . $civilStatus . "',
                '" . $age . "',
                '" . $sex . "',
                '" . $dateOfBirth . "',
       
                '" . $placeOFBirth . "',
                '" . $nationality . "',
                '" . $religion . "',
                '" . $homeHouseNo . "',
                '" . $homeStreet . "',
                '" . $homeBarangay . "',
                '" . $homeTown . "',
                '" . $homeCity . "',
                '" . $homeZipcode . "',
                '" . $provHouseNo . "',
                '" . $provStreet . "',
                '" . $provBarangay . "',
                '" . $provTown . "',
                '" . $provCity . "',   
                '" . $provZipcode . "',   
                '" . $fathersName . "',   
                '" . $fathersOccupation . "',   
                '" . $fathersContactNo . "',   
                '" . $mothersName . "',   
                '" . $mothersOccupation . "',   
                '" . $mothersContactNo . "',   
                '" . $guardiansName . "',   
                '" . $guardiansOccupation . "',   
                '" . $guardiansContactNo . "',   
                '" . $guardiansHouseNo . "',   
                '" . $guardiansStreet . "',   
                '" . $guardiansBarangay . "',   
                '" . $guardiansTown . "',   
                '" . $guardiansCity . "',   
                '" . $guardiansZipcode . "',   
                '" . $financialSupport . "',   
                '" . $stdNature . "',   
                '" . $elemName . "',   
                '" . $elemAddress . "',   
                '" . $elemHonors . "',   
                '" . $elemYear . "',   
                '" . $jhName . "',   
                '" . $jhAddress . "',   
                '" . $jhHonors . "',   
                '" . $jhYear . "',   
                '" . $shName . "',   
                '" . $shAddress . "',   
                '" . $shHonors . "',   
                '" . $shYear . "',   
                '" . $collegeName . "',   
                '" . $collegeAddress . "',   
                '" . $collegeYear . "'  
                )";
    
                $current_id = mysqli_query($con, $sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($con));
                if (isset($current_id)) {
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
                    echo "Uploaded";
                }
            }
        }
         
    }

