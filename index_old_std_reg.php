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

<?php require_once "db.php" ?>

<body>

    <section class="vh-100 gradient-custom">
        <div id="register" class="container-fluid py-5 h-100">
            <div class="row justify-content-center h-100 mb-100">
                <!--
                    INSTRUCTION 1
                -->
                <div class="col-12 col-xl-7 col-sm-12 mb-5">
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
                        <h3 class="mb-4 pb-2 pb-md-3 mb-md-0 pt-3  text-center text-light card-img-top" style="border-radius: 15px 15px 0px 0px; background-color: #980702">Old Student Pre-registration Form</h3>
                        <div class="card-body p-4 p-md-5">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <p>Please indicate complete and correct information for the records of the registrar. Write your response in all capital letters only. If the information asked is not available, just put NONE.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--
                    START OF ADMISSION FORM
                -->
                <div class="col-12 col-xl-7 col-sm-12 mb-3">
                    <div class="card shadow-3-strong card-registration" style="border-radius: 15px;">

                        <div class="card-body p-4 p-md-5">

                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Personal Information</h3>
                            <form class="form-container mx-auto" action="handler_old_std_reg.php" enctype="multipart/form-data" method="post">

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
                                                <img id="preview" src="img/id.JPG" width="150" alt="2X2 ID PIcture " />
                                            </object>
                                        </div>

                                        <div class="form-group">
                                            <input name="userImage" type="file" id="imgInp" class="form-control form-group" accept="image/png, image/gif, image/jpeg/" required>
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
                                    <div class="col-md-6  mb-4">
                                        <div class="form-group">
                                            <?php
                                            /*  
                                           ///Uncomment for all students registration////
                                           $stdRandomNumber = rand();
                                            $html = '';
                                            $html .= '<input type="text" name="stdNumber" value="' . $stdRandomNumber . '" class="form-control form-group" />';

                                            echo ($html); */
                                            ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6  mb-4">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-group uppercase" placeholder="Email" required />
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-4">
                                        <div class="form-group">
                                            <input type="text" name="stdNumber" value="" class="form-control form-group uppercase" placeholder="Student No." required />
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-4">
                                        <div class="form-group">
                                            <input type="text" name="scholarship" class="form-control form-group uppercase" placeholder="Scholarship" required />
                                        </div>

                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-group">
                                            <input type="text" name="fname" class="form-control form-group uppercase" placeholder="First Name" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6  mb-4">
                                        <div class="form-group">
                                            <input type="text" name="lname" class="form-control form-group uppercase" placeholder="Last Name" required />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6  mb-4">
                                        <div class="form-group">
                                            <input type="text" name="mname" class="form-control form-group uppercase" placeholder="Middle Name" />
                                        </div>
                                    </div>
                                    <div class="col-md-6  mb-4">
                                        <div class="form-group">
                                            <input type="tel" name="contactNumber" class="form-control form-group" placeholder="Contact Number" required />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6  mb-1">
                                        <div class="form-group">
                                            <input type="text" name="sy" class="form-control form-group" placeholder="School Year" required />
                                            <small><i><label for="shYear" class="form-label">e.g. 2022-2023</label></i></small>
                                        </div>
                                    </div>
                                    <div class="col-md-6  mb-4">
                                        <select name="sem" class="select form-control" required>
                                            <option value="" disabled selected hidden>-- Sem --</option>
                                            <option name="1st" value="1ST">1st</option>
                                            <option name="2nd" value="2ND">2nd</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6  mb-4">

                                        <select name="yearLevel" class="select form-control" required>
                                            <option value="" disabled selected hidden>-- Level Applied For --</option>
                                            <option name="Grade 11" value="GRADE 11">Grade 11</option>
                                            <option name="Grade 12" value="GRADE 12">Grade 12</option>
                                            <option name="1st Year" value="1ST YEAR">1st Year</option>
                                            <option name="2nd Year" value="2ND YEAR">2nd Year</option>
                                            <option name="3rd Year" value="3RD YEAR">3rd Year</option>
                                            <option name="4th Year" value="4TH YEAR">4th Year</option>
                                            <option name="Teacher Certificate Program (TCP-LET) 18 Units" value="Teacher Certificate Program (TCP-LET) 18 Units">Teacher Certificate Program (TCP-LET) 18 Units</option>
                                            <option name="Electrical Installation & Maintenance NC II (196 Hrs)" value="Electrical Installation & Maintenance NC II (196 Hrs)">Electrical Installation & Maintenance NC II (196 Hrs)</option>
                                            <option name="Food and Beverage Services NC II (356 Hrs)" value="Food and Beverage Services NC II (356 Hrs)">Food and Beverage Services NC II (356 Hrs)</option>
                                            <option name="Caregiving NC II (786 Hrs)" value="Caregiving NC II (786 Hrs)">Caregiving NC II (786 Hrs)</option>
                                            <option name="Electronic Products Assembly & Servicing NC II (260 Hrs)" value="Electronic Products Assembly & Servicing NC II (260 Hrs)">Electronic Products Assembly & Servicing NC II (260 Hrs)</option>
                                        </select>

                                    </div>
                                    <!-- COMMENT OUT FOR ALL STUDENTS ADMISSION -->
                                    <div class="col-md-6  mb-4">
                                        <select name="block" class="select form-control">
                                            <option value="" disabled selected hidden>-- Block --</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                            <option value="NONE">None</option>
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
                                        <input type="text" name="civilStatus" class="form-control form-group uppercase" placeholder="Civil Status" required />
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 mb-4 mb-4">
                                    <div class="form-group">
                                        <input type="number" name="age" class="form-control form-group" placeholder="Age" required />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-lg-6 mb-4 mb-4">

                                    <select name="sex" class="select form-control" id="genderDropdown" onchange='genderOthers(this.value);'>
                                        <option value="" disabled selected hidden>-- Gender --</option>
                                        <option value="MALE">Male</option>
                                        <option value="FEMALE">Female</option>
                                        <option value="AGENDER">Agender </option>
                                        <option value="BIGENDER">Bigender </option>
                                        <option value="CISGENDER">Cisgender </option>
                                        <option value="GENDER EXPRESSION">Gender Expression</option>
                                        <option value="GENDER FLUID">Gender Fluid</option>
                                        <option value="GENDERQUEER">Genderqueer</option>
                                        <option value="INTERSEX">Intersex</option>
                                        <option value="GENDER VARIANT">Gender Variant</option>
                                        <option value="MX.">Mx.</option>
                                        <option value="THIRD GENDER">Third Gender</option>
                                        <option value="TRANSGENDER">Transgender</option>
                                        <option value="TWO-SPIRIT">Two-Spirit</option>
                                        <option value="ZE / HIR">Ze / Hir</option>
                                    </select>
                                    <!-- <input type="text" name="sex" id="others" class="form-control form-group border-top-0 border-left-0 border-right-0 border-bottom-5" placeholder="Gender" style='display:;' />
                                    <small><i><label for="elemYear" class="form-label">Please Specify if other Gender</label></i></small> -->
                                </div>

                                <!-- <script type="text/javascript">
                                    function genderOthers(val) {
                                        var element = document.getElementById('others');
                                        //var dropdown = document.getElementById('genderDropdown');
                                        if (val == '-- Gender --' || val == 'Others') {
                                            element.style.display = 'block';
                                            element.focus();
                                            //genderDropdown.style.display = 'none';
                                        } else {
                                            element.style.display = 'none';
                                        }
                                    }
                                </script> -->

                                <div class="col-md-6 col-lg-6 mb-4 mb-4">
                                    <div class="form-group datepicker w-100 input-group date" id="datepicker">
                                        <input type="text" class="form-control form-group" name="dateOfBirth" placeholder="Birthday" required />
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
                                        <input type="text" name="placeOFBirth" class="form-control form-group uppercase" placeholder="Place of Birth" required />
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 mb-4 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="nationality" class="form-control form-group uppercase" placeholder="Nationality" required />
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 mb-4 mb-5">
                                    <div class="form-group">
                                        <input type="text" name="religion" class="form-control form-group uppercase" placeholder="Religion" required />
                                    </div>
                                </div>
                            </div>
                            <!-- HOME ADDRESS START -->
                            <label class="form-label">Complete Home Address</label>
                            <div class="row">
                                <div class="col-md-4 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="homeHouseNo" class="form-control form-group uppercase" placeholder="House No." required />
                                    </div>
                                </div>
                                <div class="col-md-5 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="homeStreet" class="form-control form-group uppercase" placeholder="Street" required />
                                    </div>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="homeBarangay" class="form-control form-group uppercase" placeholder="Barangay" required />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="homeTown" class="form-control form-group uppercase" placeholder="Town/District" required />
                                    </div>
                                </div>
                                <div class="col-md-5 mb-5">
                                    <div class="form-group">
                                        <input type="text" name="homeCity" class="form-control form-group uppercase" placeholder="City/Province" required />
                                    </div>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <div class="form-group">
                                        <input type="number" name="homeZipcode" class="form-control form-group" placeholder="Zipcode" required />
                                    </div>
                                </div>
                            </div>
                            <!-- HOME ADDRESS END -->

                            <!-- PROV START -->
                            <label class="form-label">Complete Provincial Address</label>
                            <div class="row">
                                <div class="col-md-4 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="provHouseNo" class="form-control form-group uppercase" placeholder="House No." required />
                                    </div>
                                </div>
                                <div class="col-md-5 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="provStreet" class="form-control form-group uppercase" placeholder="Street" required />
                                    </div>
                                </div>
                                <div class="col-md-3 mb-">
                                    <div class="form-group">
                                        <input type="text" name="provBarangay" class="form-control form-group uppercase" placeholder="Barangay" required />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="provTown" class="form-control form-group uppercase" placeholder="Town/District" required />
                                    </div>
                                </div>
                                <div class="col-md-5 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="provCity" class="form-control form-group uppercase" placeholder="City/Province" required />
                                    </div>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <div class="form-group">
                                        <input type="number" name="provZipcode" class="form-control form-group" placeholder="Zipcode" required />
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
                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="fathersSurname" class="form-control form-group uppercase" placeholder="Surname" required />
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="fathersGivenName" class="form-control form-group uppercase" placeholder="Given Name" required />
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="fathersMiddleName" class="form-control form-group uppercase" placeholder="Middle Name" />
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="fathersOccupation" class="form-control form-group uppercase" placeholder="Occupation" required />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <input type="tel" name="fathersContact" class="form-control form-group" placeholder="Contact No." required />
                                    </div>
                                </div>
                            </div>
                            <!-- FATHERS INFO END-->

                            <!-- MOTHERS INFO START-->
                            <label class="form-label">Mother's Maiden Information</label>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="mothersMaidenName" class="form-control form-group uppercase" placeholder="Surname" required />
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="mothersGivenName" class="form-control form-group uppercase" placeholder="Given Name" required />
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="mothersMiddleName" class="form-control form-group uppercase" placeholder="Middle Name" />
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="mothersOccupation" class="form-control form-group uppercase" placeholder="Occupation" required />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <input type="tel" name="mothersContact" class="form-control form-group" placeholder="Contact No." required />
                                    </div>
                                </div>
                            </div>
                            <!-- MOTHERS INFO END-->

                            <!-- GUARDIAN INFO START-->
                            <label class="form-label">Guardian's Information</label>
                            <div class="row">
                                <div class="col-md-5 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="guardiansName" class="form-control form-group uppercase" placeholder="Name" required />
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="guardiansOccupation" class="form-control form-group uppercase" placeholder="Occupation" required />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="tel" name="guardiansContact" class="form-control form-group" placeholder="Contact No." required />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="relationshipToGuardian" class="form-control form-group uppercase" placeholder="Relationship to your Guardian" required />
                                    </div>
                                </div>
                            </div>

                            <!-- GUARDIAN INFO END-->

                            <!-- GUARDIANS ADDRESS START -->
                            <label class="form-label">Guardian's Complete Address</label>
                            <div class="row">
                                <div class="col-md-4 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="guardiansHouseNo" class="form-control form-group uppercase" placeholder="House No." required />
                                    </div>
                                </div>
                                <div class="col-md-5 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="guardiansStreet" class="form-control form-group uppercase" placeholder="Street" required />
                                    </div>
                                </div>
                                <div class="col-md-3 mb-">
                                    <div class="form-group">
                                        <input type="text" name="guardiansBarangay" class="form-control form-group uppercase" placeholder="Barangay" required />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="guardiansTown" class="form-control form-group uppercase" placeholder="Town/District" required />
                                    </div>
                                </div>
                                <div class="col-md-5 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="guardiansCity" class="form-control form-group uppercase" placeholder="City/Province" required />
                                    </div>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <div class="form-group">
                                        <input type="number" name="guardiansZipcode" class="form-control form-group" placeholder="Zipcode" required />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-7 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="financialSupport" class="form-control form-group uppercase" placeholder="Who is giving you financial support?" required />
                                    </div>
                                </div>
                                <div class="col-md-5 mb-4">
                                    <select name="stdNature" class="select form-control" required>
                                        <option value="" disabled selected hidden>-- Student Nature--</option>
                                        <option value="FULLTIME STUDENT">Fulltime Student</option>
                                        <option value="WORKING STUDENT">Working Student</option>
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
                <div class="col-12 col-9 col-xl-7 mb-3">
                    <div class="card shadow-3-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Educational History</h3>


                            <!-- ELEMENTARY START-->
                            <label class="form-label">Elementary</label>
                            <div class="row">
                                <div class="col-md-6 col-lg-6 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="elemName" class="form-control form-group uppercase" placeholder="Name of School Attended" required />
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="elemAddress" class="form-control form-group uppercase" placeholder="Address of School Attended" required />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-lg-6 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="elemHonors" class="form-control form-group uppercase" placeholder="Honors/Awards Received" required />
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 mb-1">
                                    <div class="form-group">
                                        <input type="text" name="elemYear" id="elemYear" class="form-control form-group" placeholder="Year Began and Completed" required />
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
                                        <input type="text" name="jhName" class="form-control form-group uppercase" placeholder="Name of School Attended" required />
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="jhAddress" class="form-control form-group uppercase" placeholder="Address of School Attended" required />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-lg-6 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="jhHonors" class="form-control form-group uppercase" placeholder="Honors/Awards Received" required />
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 mb-1">
                                    <div class="form-group">
                                        <input type="text" name="jhYear" id="jhYear" class="form-control form-group" placeholder="Year Began and Completed" required />
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
                                        <input type="text" name="shName" class="form-control form-group uppercase" placeholder="Name of School Attended" required />
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="shAddress" class="form-control form-group uppercase" placeholder="Address of School Attended" required />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-lg-6 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="shHonors" class="form-control form-group uppercase" placeholder="Honors/Awards Received" required />
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 mb-1">
                                    <div class="form-group">
                                        <input type="text" name="shYear" id="shYear" class="form-control form-group" placeholder="Year Began and Completed " required />
                                        <small><i><label for="shYear" class="form-label">e.g. 2016-2018</label></i></small>
                                    </div>
                                </div>
                            </div>
                            <!-- SH END-->
                            <!-- COLLEGE START-->
                            <label class="form-label">College/Vocational</label>
                            <div class="row">
                                <div class="col-md-6 col-lg-6 mb-4">
                                    <div class="form-group">
                                        <input type="text" onchange="uppercase()" name="collegeName" id="collegeNamee" class="form-control form-group uppercase" placeholder="Name of School Attended" required />
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="collegeAddress" class="form-control form-group uppercase" placeholder="Address of School Attended" required />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-lg-6 mb-1">
                                    <div class="form-group">
                                        <input type="text" name="collegeYear" id="collegeYear" class="form-control form-group" placeholder="Year Began and Completed" required />
                                        <small><i><label for="collegeYear" class="form-label">e.g. 2018-2022</label></i></small>
                                    </div>
                                </div>
                            </div>
                            <!-- COLLEGE END-->

                        </div>

                    </div>
                </div>

                <!--
                   VACCINATION
                -->
                <div class="col-12 col-9 col-xl-7">
                    <div class="card shadow-3-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Vaccine</h3>
                            <div class="row">
                                <div class="col-md-12 col-lg-12 mb-4">
                                    <select name="vaccine" class="select form-control" onchange="showDiv(this)" required>
                                        <option value="" disabled selected hidden>-- Vaccination--</option>
                                        <option value="FULLY VACCINATED">Fully Vaccinated</option>
                                        <option value="PARTIALLY VACCINATED">Partially Vaccinated</option>
                                        <option value="NOT VACCINATED">Not Vaccinated</option>
                                    </select>
                                </div>
                            </div>

                            <!-- VACCINATION CARD IMAGE START-->
                            <!-- <div class="row">
                                <div class="col-md-12  mb-4">
                                    <div class="form-group">
                                        <input name="vacsImage" type="file" style="display: none;" id="vacsImg" class="form-control form-group" accept="image/png, image/gif, image/jpeg/">
                                    </div>
                                    <div class="form-group float-center " id="vacsPreview1" style="display:none">
                                        <object style="margin-left:4%; ">
                                            <img id="vacsPreview" src="img/LOGO-CASAUL1.png" style="border:solid 1px black" width="500" height="300" alt="2X2 ID PIcture" />
                                        </object>
                                    </div>

                                </div>
                            </div> -->
                            <!-- VACCINATION CARD IMAGE END-->

                            <!-- BUTTON -->


                            <div class="col-12">
                                <div class=" shadow-3-strong card-registration mb-5" style="border-radius: 15px;">
                                    <div class=" ">
                                        <small><i><label for="" class="form-label"><b>Note:</b> Please review your information above before clicking the Enroll button</label></i></small>
                                        <br>
                                        <!-- <a href="index.php" class="btn btn-info btn-md" onClick="document.getElementById('register').scrollIntoView();">
                                            Clear
                                        </a> -->
                                        <button class="btn btn-primary col-12 btn-md" name="enroll" style="background: #980702" type="submit">
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

    <script>
        //SELECT AN VACS IMAGE
        vacsImg.onchange = evt => {
            const [file] = vacsImg.files
            if (file) {
                vacsPreview.src = URL.createObjectURL(file);
                vacsPreview1.style.display = "block";
            }
        }
    </script>

    <!--
    <script type="text/javascript">
        //TO SHOW THE IMAGE INPUT
        function showDiv(select) {
            if (select.value == "Fully Vaccinated") {

                document.getElementById('vacsImg').style.display = "block";
                document.getElementById("vacsImg").value = "";
                document.getElementById("vacsPreview").src = "img/LOGO-CASAUL1.png";

            } else if (select.value == "Partially Vaccinated") {

                document.getElementById('vacsImg').style.display = "block";
                document.getElementById("vacsImg").value = "";
                document.getElementById("vacsPreview").src = "img/LOGO-CASAUL1.png";

            } else {

                document.getElementById('vacsImg').style.display = "block";
                document.getElementById('vacsPreview1').style.display = "block";
                document.getElementById("vacsImg").value = "";
                document.getElementById("vacsPreview").src = "img/LOGO-CASAUL1.png";

            }
        }
    </script>
    -->


    <script type="text/javascript">
        $(function() {
            $(".uppercase").focusout(function() {
                // Uppercase-ize contents
                this.value = this.value.toLocaleUpperCase();
            });
        });
    </script>
</body>