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

<!--
    <form name="frmImage" enctype="multipart/form-data" action="" method="post" class="frmImageUpload">
        <label>Upload Image File:</label><br />
        <input name="studentNumber" type="text"  />
        <input name="userImage" type="file" class="inputFile" />
        <input type="submit" value="Submit" class="btnSubmit" />
    </form>
    </div>
-->

<?php require_once "db.php";
?>

<body>
    <section>
        <div class="col-12 col-lg-12 col-xl-12 mb-3">
            <div class="card shadow-3-strong"">
                        <img class=" card-img-top" src="img/227134314_3979003432208803_3711170756453396855_n.jpg" alt="">
                <div class="card-body p-4 p-md-5 text-center">
                    <div class="col-12 col-md-12 ">
                        <div class="row justify-content-center align-items-center h-100">
                            <div class="col-md-4">
                                <button type="button" class="btn btn-success btn-lg mb-5" style="border-radius: 50px; 
                                     width: 100%;border: none;
                                    background: #980702" onClick="document.getElementById('register').scrollIntoView();">
                                    New Student
                                </button>
                            </div>
                            <div class="col-md-4">
                                <a href="login.php" type="button" class="btn btn-success btn-lg mb-5 " style="border-radius: 50px; 
                                     width: 100%;border: none;
                                    background: #980702; color: white; text-decoration: none;">
                                    Old Student
                                </a>
                            </div>
                        </div>
                    </div>
                    <h5 class="card-title">About us</h5>
                    <p align="justify" class="mb-4 pb-2 pb-md-0 mb-md-5" style="font-size: 30px;">
                        The Dr. Ruby Lanting Casaul Educational Foundation, Incorporated Dr.
                        Romeo B. Casaul Technological Institute Foundation, Incorporated
                        is a non-profit, non-stock educational foundation.
                        This institution
                        began in 1997, when Dr. Romeo B. Casaul and Dr. Ruby Lanting Casaul, who
                        were running Dr. Carlos S. Lanting College in Tandang Sora, Quezon City,
                        decided to open a branch of the school in their hometown, the City of Tabasco, to
                        develop rural manpower through baccalaureate and technical-vocational
                        courses. This school was then known as Dr. Carlos S. Lanting College offering
                        baccalaureate courses with its technical-vocational course. At present both
                        Colleges both fully recognized by the Commission on Higher Education (CHED),
                        the Technical Education and Skills Development (TESDA), and the Department
                        of Education (DepEd). In June 2010, both institutions were converted into an
                        educational foundation in honor of its founders, thus, the birth of Dr. Carlos S.
                        Lanting College-Dr. Ruby Lanting Casaul Educational Foundation Incorporated,
                        and the Romeo B. Casaul Technological Institute Foundation, Incorporated as
                        non-stock non-profit educational foundation situated at the heart of the City of
                        Tabaco, Province of Albay in the Bicol Region.
                        <br>
                        <br>
                        To date, the institution continues to offer education in both baccalaureate
                        and vocational courses, offering learning opportunities for students to choose
                        from five baccalaureate degrees, namely, Bachelor of Science in Elementary
                        Education (BEED) with specialization in General Education and Special
                        Education (SPED), Bachelor of Science in Secondary Education (BSED) major in
                        Mathematics, English, Filipino, and Social Science. Bachelor of Science in
                        Business Administration (BSBA) major in Financial Management, Bachelor of
                        Science in Hospitality Management (BSHM), Bachelor of Science in Computer
                        5
                        Science (BSCS), and the latest program approved by the Commission on Higher
                        Education (CHED) the Bachelor of Science in Technical Teacher Education
                        (BTTE).
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="vh-100 gradient-custom ">
        <div id="register" class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100 mb-100">
                <div class="col-12 col-lg-9 col-xl-7 mb-3">
                    <div class="card shadow-3-strong card-registration" style="border-radius: 15px;">
                        <h3 class="mb-4 pb-2 pb-md-3 mb-md-0 pt-3  text-center text-light card-img-top" style="border-radius: 15px 15px 0px 0px; background-color: #980702">Student Admission Form</h3>
                        <div class="card-body p-4 p-md-5">

                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Personal Information</h3>
                            <form class="form-container mx-auto" action="handler.php" enctype="multipart/form-data" method="post">

                                <div class="row">
                                    <?php
                                    $html = '';
                                    $dateOfReg = date_create(date('Y-m-d'));
                                    //date_add($dateOfReg, date_interval_create_from_date_string('1 day'));
                                    $html .= '<input 
                                                type="hidden"
                                                name="dateOfReg" 
                                                value="' . date_format($dateOfReg, 'Y-m-d') . '";
                                                />';
                                    echo ($html);
                                    ?>
                                    <div class="col-md-6 mb-4">

                                        <div class="form-group">
                                            <object style="margin-left:20%">
                                                <img id="preview" src="#" width="150" />
                                            </object>
                                        </div>
                                        <div class="form-group">
                                            <input name="userImage" type="file" id="imgInp" class="form-control form-group" accept="image/png, image/gif, image/jpeg/, image/jpg/">
                                        </div>
                                        <script>
                                            imgInp.onchange = evt => {
                                                const [file] = imgInp.files
                                                if (file) {
                                                    preview.src = URL.createObjectURL(file)
                                                }
                                            }
                                        </script>
                                    </div>
                                    <div class="col-md-6  mb-4" hidden>
                                        <div class="form-group">
                                            <?php $stdRandomNumber = rand();
                                            $html = '';
                                            $html .= '<input type="text" name="stdNumber" value="' . $stdRandomNumber . '" class="form-control form-group" />';

                                            echo ($html);
                                            ?>
                                        </div>
                                    </div>



                                </div>

                                <div class="row">
                                    <div class="col-md-6  mb-4">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-group" placeholder="Email" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-group">
                                            <input type="text" name="scholarship" class="form-control form-group" placeholder="Scholarship" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-group">
                                            <input type="text" name="fname" class="form-control form-group" placeholder="First Name" />
                                        </div>
                                    </div>
                                    <div class="col-md-6  mb-4">
                                        <div class="form-group">
                                            <input type="text" name="lname" class="form-control form-group" placeholder="Last Name" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6  mb-4">
                                        <div class="form-group">
                                            <input type="text" name="mname" class="form-control form-group" placeholder="Middle Name" />
                                        </div>
                                    </div>
                                    <div class="col-md-6  mb-4">
                                        <div class="form-group">
                                            <input type="tel" name="contactNumber" class="form-control form-group" placeholder="Contact Number" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6  mb-4">
                                        <div class="form-group">
                                            <input type="text" name="sy" class="form-control form-group" placeholder="School Year" />
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
                                    <div class="col-md-12  mb-4">

                                        <select name="yearLevel" class="select form-control">
                                            <option value="" disabled selected hidden>-- Level Applied For --</option>
                                            <option name="1st Year" value="1st Year">1st Year</option>
                                            <option name="2nd Year" value="2nd Yaer">2nd Yaer</option>
                                            <option name="3rd Year" value="3rd Yaer">3rd Year</option>
                                            <option name="4th Year" value="4th Year">4th Yaer</option>
                                            <option name="LET" value="LET">LET</option>
                                        </select>

                                    </div>
                                    <div class="col-md-6  mb-4" hidden>
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
                                        <select name="course" class="select form-control">
                                            <?php echo $optionData; ?>
                                        </select>
                                    </div>
                                </div>

                        </div>
                    </div>
                </div>
                <!--
                    OTHER INFORMATIONf
                -->
                <div class="col-12 col-9 col-xl-7  mb-3">
                    <div class="card shadow-3-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Other Information</h3>
                            <div class="row">
                                <div class="col-md-6 col-lg-6 mb-4 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="civilStatus" class="form-control form-group" placeholder="Civil Status" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 mb-4 mb-4">
                                    <div class="form-group">
                                        <input type="number" name="age" class="form-control form-group" placeholder="Age" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-lg-6 mb-4 mb-4">
                                    <select name="sex" class="select form-control">
                                        <option value="" disabled selected hidden>-- Sex --</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-lg-6 mb-4 mb-4">
                                    <div class="form-group datepicker w-100 input-group date" id="datepicker">
                                        <input type="text" class="form-control form-group" name="dateOfBirth" placeholder="Birthday" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-white">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>

                                    </div>
                                </div>
                                <script type="text/javascript">
                                    $(function() {
                                        $('#datepicker').datepicker();
                                    });
                                </script>
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-lg-6 mb-4 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="placeOFBirth" class="form-control form-group" placeholder="Place of Birth" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 mb-4 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="nationality" class="form-control form-group" placeholder="Nationality" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 mb-4 mb-5">
                                    <div class="form-group">
                                        <input type="text" name="religion" class="form-control form-group" placeholder="Religion" />
                                    </div>
                                </div>
                            </div>
                            <!-- HOME ADDRESS START -->
                            <label class="form-label">Complete Home Address</label>
                            <div class="row">
                                <div class="col-md-4 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="homeHouseNo" class="form-control form-group" placeholder="House No." />
                                    </div>
                                </div>
                                <div class="col-md-5 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="homeStreet" class="form-control form-group" placeholder="Street" />
                                    </div>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="homeBarangay" class="form-control form-group" placeholder="Barangay" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="homeTown" class="form-control form-group" placeholder="Town/District" />
                                    </div>
                                </div>
                                <div class="col-md-5 mb-5">
                                    <div class="form-group">
                                        <input type="text" name="homeCity" class="form-control form-group" placeholder="City/Province" />
                                    </div>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <div class="form-group">
                                        <input type="number" name="homeZipcode" class="form-control form-group" placeholder="Zipcode" />
                                    </div>
                                </div>
                            </div>
                            <!-- HOME ADDRESS END -->

                            <!-- PROV START -->
                            <label class="form-label">Complete Provincial Address</label>
                            <div class="row">
                                <div class="col-md-4 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="provHouseNo" class="form-control form-group" placeholder="House No." />
                                    </div>
                                </div>
                                <div class="col-md-5 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="provStreet" class="form-control form-group" placeholder="Street" />
                                    </div>
                                </div>
                                <div class="col-md-3 mb-">
                                    <div class="form-group">
                                        <input type="text" name="provBarangay" class="form-control form-group" placeholder="Barangay" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="provTown" class="form-control form-group" placeholder="Town/District" />
                                    </div>
                                </div>
                                <div class="col-md-5 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="provCity" class="form-control form-group" placeholder="City/Province" />
                                    </div>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <div class="form-group">
                                        <input type="number" name="provZipcode" class="form-control form-group" placeholder="Zipcode" />
                                    </div>
                                </div>
                            </div>
                            <!-- PROV END -->


                        </div>
                    </div>
                </div>
                <!--
                   PARENTS/GUARDIAN
                -->
                <div class="col-12 col-9 col-xl-7 mb-3">
                    <div class="card shadow-3-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Parents/Guardian</h3>


                            <!-- FATHERS INFO START-->
                            <label class="form-label">Father's Information</label>
                            <div class="row">
                                <div class="col-md-5 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="fathersName" class="form-control form-group" placeholder="Name" />
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="fathersOccupation" class="form-control form-group" placeholder="Occupation" />
                                    </div>
                                </div>
                                <div class="col-md-3 mb-">
                                    <div class="form-group">
                                        <input type="tel" name="fathersContact" class="form-control form-group" placeholder="Contact No." />
                                    </div>
                                </div>
                            </div>
                            <!-- FATHERS INFO END-->

                            <!-- MOTHERS INFO START-->
                            <label class="form-label">Mother's Information</label>
                            <div class="row">
                                <div class="col-md-5 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="mothersName" class="form-control form-group" placeholder="Name" />
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="mothersOccupation" class="form-control form-group" placeholder="Occupation" />
                                    </div>
                                </div>
                                <div class="col-md-3 mb-">
                                    <div class="form-group">
                                        <input type="tel" name="mothersContact" class="form-control form-group" placeholder="Contact No." />
                                    </div>
                                </div>
                            </div>
                            <!-- MOTHERS INFO END-->

                            <!-- GUARDIAN INFO START-->
                            <label class="form-label">Guardian's Information</label>
                            <div class="row">
                                <div class="col-md-5 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="guardiansName" class="form-control form-group" placeholder="Name" />
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="guardiansOccupation" class="form-control form-group" placeholder="Occupation" />
                                    </div>
                                </div>
                                <div class="col-md-3 mb-">
                                    <div class="form-group">
                                        <input type="tel" name="guardiansContact" class="form-control form-group" placeholder="Contact No." />
                                    </div>
                                </div>
                            </div>
                            <!-- GUARDIAN INFO END-->

                            <!-- GUARDIANS ADDRESS START -->
                            <label class="form-label">Guardian's Complete Address</label>
                            <div class="row">
                                <div class="col-md-4 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="guardiansHouseNo" class="form-control form-group" placeholder="House No." />
                                    </div>
                                </div>
                                <div class="col-md-5 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="guardiansStreet" class="form-control form-group" placeholder="Street" />
                                    </div>
                                </div>
                                <div class="col-md-3 mb-">
                                    <div class="form-group">
                                        <input type="text" name="guardiansBarangay" class="form-control form-group" placeholder="Barangay" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="guardiansTown" class="form-control form-group" placeholder="Town/District" />
                                    </div>
                                </div>
                                <div class="col-md-5 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="guardiansCity" class="form-control form-group" placeholder="City/Province" />
                                    </div>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <div class="form-group">
                                        <input type="number" name="guardiansZipcode" class="form-control form-group" placeholder="Zipcode" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-7 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="financialSupport" class="form-control form-group" placeholder="Who is giving you financial support?" />
                                    </div>
                                </div>
                                <div class="col-md-5 mb-4">
                                    <select name="stdNature" class="select form-control">
                                        <option value="" disabled selected hidden>-- Student Nature--</option>
                                        <option value="Fulltime Student">Fulltime Student</option>
                                        <option value="Working Student">Working Student</option>
                                    </select>
                                </div>
                            </div>
                            <!-- GUARDIANS ADDRESS END -->
                        </div>
                    </div>
                </div>
                <!--
                   EDUCATIONAL HISTORY
                -->
                <div class="col-12 col-9 col-xl-7">
                    <div class="card shadow-3-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Educational History</h3>


                            <!-- ELEMENTARY START-->
                            <label class="form-label">Elementary</label>
                            <div class="row">
                                <div class="col-md-6 col-lg-6 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="elemName" class="form-control form-group" placeholder="Name of School Attended" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="elemAddress" class="form-control form-group" placeholder="Address of School Attended" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-lg-6 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="elemHonors" class="form-control form-group" placeholder="Honors/Awards Received" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 mb-1">
                                    <div class="form-group">
                                        <input type="text" name="elemYear" id="elemYear" class="form-control form-group" placeholder="Year Began and Completed" />
                                        <small><i><label for="elemYear" class="form-label">e.g. 2006-2012</label></i></small>
                                    </div>
                                </div>
                            </div>
                            <!-- ELEMENTARY END-->

                            <!-- JH START-->
                            <label class="form-label">Junior High School</label>
                            <div class="row">
                                <div class="col-md-6 col-lg-6 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="jhName" class="form-control form-group" placeholder="Name of School Attended" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="jhAddress" class="form-control form-group" placeholder="Address of School Attended" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-lg-6 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="jhHonors" class="form-control form-group" placeholder="Honors/Awards Received" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 mb-1">
                                    <div class="form-group">
                                        <input type="text" name="jhYear" id="jhYear" class="form-control form-group" placeholder="Year Began and Completed" />
                                        <small><i><label for="jhYear" class="form-label">e.g. 2012-2016</label></i></small>
                                    </div>
                                </div>
                            </div>
                            <!-- JH END-->

                            <!-- SH START-->
                            <label class="form-label">Senior High School</label>
                            <div class="row">
                                <div class="col-md-6 col-lg-6 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="shName" class="form-control form-group" placeholder="Name of School Attended" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="shAddress" class="form-control form-group" placeholder="Address of School Attended" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-lg-6 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="shHonors" class="form-control form-group" placeholder="Honors/Awards Received" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 mb-1">
                                    <div class="form-group">
                                        <input type="text" name="shYear" id="shYear" class="form-control form-group" placeholder="Year Began and Completed " />
                                        <small><i><label for="shYear" class="form-label">e.g. 2015-2018</label></i></small>
                                    </div>
                                </div>
                            </div>
                            <!-- SH END-->
                            <!-- COLLEGE START-->
                            <label class="form-label">College/Vocational</label>
                            <div class="row">
                                <div class="col-md-6 col-lg-6 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="collegeName" class="form-control form-group" placeholder="Name of School Attended" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="collegeAddress" class="form-control form-group" placeholder="Address of School Attended" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-lg-6 mb-1">
                                    <div class="form-group">
                                        <input type="text" name="collegeYear" id="collegeYear" class="form-control form-group" placeholder="Year Began and Completed" />
                                        <small><i><label for="collegeYear" class="form-label">e.g. 2018-2022</label></i></small>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 mb-1">
                                    <div class="form-group">
                                        <input name="qrImage" type="file" id="imgInp" class="form-control form-group" accept="image/png, image/gif, image/jpeg/">
                                        <label class="form-label">Upload a picture of your signature to be generated as your personal QR Code after you are officially enrolled.</label>
                                    </div>
                                </div>
                            </div>
                            <!-- COLLEGE END-->
                            <!-- BUTTON -->
                            <div class="col-12 col-lg-9 col-xl-7">
                                <div class=" shadow-3-strong card-registration mb-5" style="border-radius: 15px;">
                                    <div class=" ">
                                        <a href="index.php" class="btn btn-info btn-md" onClick="document.getElementById('register').scrollIntoView();">
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

                    </div>
                </div>
                </form>
            </div>
        </div>
    </section>

</body>