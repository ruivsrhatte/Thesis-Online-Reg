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

if (isset($_POST['submit'])) {
    $stdNUmber = $_POST['stdNo'];

    $qeury = mysqli_query($con, "SELECT StdNumber form student WHERE StdNumber = '$stdNUmber'");
    if (mysqli_num_rows($qeury) > 0) {
        header("Location: old-student.php");
    }
}

?>

<body>
    <section class="vh-100 gradient-custom ">
        <div id="register" class="container h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-3-strong card-registration" style="border-radius: 15px;">
                        <h3 class="mb-4 pb-2 pb-md-3 mb-md-0 pt-3  text-center text-light card-img-top" style="border-radius: 15px 15px 0px 0px; background-color: #980702">
                            Old Student Enrollment Form
                        </h3>
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
                                            <input type="text" name="stdNumber" class="form-control form-group" placeholder="Student No." required/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-group">
                                            <input type="text" name="scholarship" class="form-control form-group" placeholder="Scholarship" required/>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-12  mb-4">
                                        <div class="form-group">
                                            <input type="tel" name="contactNumber" class="form-control form-group" placeholder="Contact Number" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6  mb-4">
                                        <div class="form-group">
                                            <input type="text" name="sy" class="form-control form-group" placeholder="School Year" required/>
                                        </div>
                                    </div>
                                    <div class="col-md-6  mb-4">
                                        <select name="sem" class="select form-control">
                                            <option value="" disabled selected hidden>-- Sem --</option>
                                            <option name="1st" value="1st">1st</option>
                                            <option name="2nd" value="2nd">2nd</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6  mb-4">

                                        <select name="yearLevel" class="select form-control" required>
                                            <option value="" disabled selected hidden>-- Level Applied For --</option>
                                            <option name="1st Year" value="1st Year">1st Year</option>
                                            <option name="2nd Year" value="2nd Yaer">2nd Yaer</option>
                                            <option name="3rd Year" value="3rd Yaer">3rd Year</option>
                                            <option name="4th Year" value="4th Year">4th Yaer</option>
                                            <option name="LET" value="LET">LET</option>
                                        </select>

                                    </div>
                                    <div class="col-md-6  mb-4">
                                        <select name="block" class="select form-control">
                                            <option value="" disabled selected hidden>-- Block --</option>
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