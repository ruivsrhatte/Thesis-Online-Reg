<head>
    <link rel="shortcut icon" type="image/x-icon" href="logo.ico" />
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <link href="css/registration.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>


    <TITLE>DRLCIFI - Registration Form</TITLE>
</head>
<?php require_once "db.php";
session_start();
if (isset($_POST['submit'])) {
    $stdNUmber = $_POST['stdNo'];

    $qeury = mysqli_query($con, "SELECT StdNumber form student WHERE StdNumber = '$stdNUmber'");
    if (mysqli_num_rows($qeury) > 0) {
        header("Location: old-student.php");
    }
}

?>

<body>
    <section class="vh-100 gradient-custom py-5 ">
        <div id="register" class="container h-100 ">
            <div class="row justify-content-center align-items-center  h-100 ">

              <!--
                    INSTRUCTION 1
                -->
                <div class="col-12 col-9 col-xl-7 mb-5">
                    <div class="card shadow-3-strong card-registration" style="border-radius: 15px;">
                        <h3 class="mb-4 pb-2 pb-md-3 mb-md-0 pt-3  text-center text-light card-img-top" style="border-radius: 15px 15px 0px 0px; background-color: #980702"></h3>
                        <div class="card-body p-4 p-md-5">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <h5 class="card-title" style="font-size: 25px;"> </h5>
                                        <p align="justify" class="mb-4 pb-2 pb-md-0 mb-md-5">
                                            Please fill-out this form properly. This will serve as your pre-admission form. After filling out this form, you need to go to the registrar's office to process your enrollment, and for you to be officially enrolled, bring the required documents for registration. Thank you.
                                            Note: Please enter your information correctly to avoid a false record of your identity and expedite your document's processing.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--
                    INSTRUCTION 2
                -->
                <div class="col-12 col-9 col-xl-7  mb-3">
                    <div class="card shadow-3-strong card-registration" style="border-radius: 15px;">
                        <h3 class="mb-4 pb-2 pb-md-3 mb-md-0 pt-3  text-center text-light card-img-top" style="border-radius: 15px 15px 0px 0px; background-color: #980702">Old Student Pre-Admission Form</h3>
                        <div class="card-body p-4 p-md-5">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <p>Please indicate complete and correct information for the records of the registrar. Write your response in all capital letters only. If the information asked is not available, just put NA.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--
                    START OF ADMISSION FORM
                -->
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-3-strong card-registration" style="border-radius: 15px;">
                        
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Student Information</h3>
                            <form class="form-container mx-auto" action="old-student-handler.php" enctype="multipart/form-data" method="post">
                                <input type="hidden" name="action" value="personalInfo">
                                <div class="row">
                                    <?php
                                    $html = '';
                                    $dateOfReg = date_create(date('Y-m-d'));
                                    date_add($dateOfReg, date_interval_create_from_date_string('1 day'));
                                    $html .= '<input 
                                                type="hidden"
                                                name="dateOfReg" 
                                                value="' . date_format($dateOfReg, 'Y-m-d') . '";
                                                />';
                                    echo ($html);
                                    ?>

                                    <div class="col-md-6  mb-4">
                                        <div class="form-group">
                                            <label>Student No.</label>
                                            <input type="text" name="stdNumber" class="form-control form-group" placeholder="Student No." value="<?= $_SESSION['stdNo'] ?>" readonly />
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-group">
                                            <label>Scholarship</label>
                                            <input type="text" name="scholarship" class="form-control form-group" placeholder="Scholarship" value="<?= $_SESSION['scholarship'] ?>" required />
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-12  mb-4">
                                        <div class="form-group">
                                        <label>Contact No.</label>
                                            <input type="tel" name="contactNumber" class="form-control form-group" placeholder="Contact Number" value="<?= $_SESSION['contactNo'] ?>" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6  mb-4">
                                        <div class="form-group">
                                        <label>School Year</label>
                                            <input type="text" name="sy" class="form-control form-group" placeholder="School Year" value="<?= $_SESSION['sy'] ?>" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6  mb-4">
                                    <label>Sem</label>
                                        <select name="sem" class="select form-control">
                                            <option value="" disabled selected hidden><?= $_SESSION['sem'] ?></option>
                                            <option name="1st" value="1st">1st</option>
                                            <option name="2nd" value="2nd">2nd</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6  mb-4">
                                    <label>Year</label>
                                        <select name="yearLevel" class="select form-control" required>
                                            <option value="" disabled selected hidden><?= $_SESSION['year'] ?></option>
                                            <option name="1st Year" value="1st Year">1st Year</option>
                                            <option name="2nd Year" value="2nd Year">2nd Year</option>
                                            <option name="3rd Year" value="3rd Year">3rd Year</option>
                                            <option name="4th Year" value="4th Year">4th Year</option>
                                            <option name="LET" value="LET">LET</option>
                                        </select>

                                    </div>
                                    <div class="col-md-6  mb-4">
                                    <label>Block</label>
                                        <select name="block" class="select form-control">
                                            <option value="" disabled selected hidden><?= $_SESSION['block'] ?></option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                            <option value="None">None</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 mb-4">
                                    
                                        <?php
                                        $optionData = '<option  disabled selected hidden id = "0">-- Courses Offered --</option>';
                                        $result = mysqli_query($con, "SELECT * FROM course");
                                        while ($row = $result->fetch_assoc()) {
                                            $optionData .= "<option>" . $row['CourseName'] . "</option>";
                                        }
                                        ?>
                                        <select name="course" class="select form-control" required>
                                            <?php echo $optionData; ?>
                                        </select>
                                    </div>
                                </div>
                                <!-- BUTTON -->
                                <div class="col-12 col-lg-9 col-xl-7 mt-3">
                                    <div class=" shadow-3-strong card-registration mb-5" style="border-radius: 15px;">
                                        <div class=" ">
                                            <a href="old-student.php" class="btn btn-info btn-md" onClick="document.getElementById('register').scrollIntoView();">
                                                Clear
                                            </a>
                                            <button class="btn btn-primary btn-md" name="enroll" style="background: #980702" type="submit">
                                                Enroll
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- END OF BUTTON  -->
                        </div>
                        <!--
                    OTHER INFORMATIONf
                -->
                        </form>

                    </div>

                </div>

            </div>
        </div>
    </section>
</body>