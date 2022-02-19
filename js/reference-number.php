<?php
session_start();
if($_POST){
    require('fpdf/fpdf.php');
    //$image['imgData'] = $_POST['userImage'];
    $_SESSION['stdNumber'] = $_POST['stdNo'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['scholarship'] = $_POST['scholarship'];
    $_SESSION['lname'] = $_POST['lname'];
    $_SESSION['fname'] = $_POST['fname'];
    $_SESSION['mname'] = $_POST['mname'];
    $_SESSION['contactNumber'] = $_POST['contactNumber'];
    $_SESSION['sy']= $_POST['sy'];
    $_SESSION['sem']= $_POST['sem'];
    $_SESSION['yearLevel']= $_POST['yearLevel'];
    $_SESSION['course']= $_POST['course'];
    $_SESSION['dateOfReg']= $_POST['dateOfReg'];
    $title = "Download and Print this PDF file and present this 
at the registrar's office of 
Dr. Ruby Lanting Casaul Educational Foundation, Inc. 
located at Tomas Cabiles, St., Tabaco City";

    $pdf = new FPDF();

    $pdf -> AddPage();
    $pdf->SetTitle($title);
    // Arial bold 15
    $pdf->SetFont('Arial', false,15);
    // Calculate width of title and position
    $w = $pdf->GetStringWidth($title);
    $pdf->SetX((85-$w)/2);
    // Colors of frame, background and text
    $pdf->SetDrawColor(221,221,221,1);
    $pdf->SetFillColor(255,255,255,1);
    $pdf->SetTextColor(0,0,0,1);
    // Thickness of frame (1 mm)
    $pdf->SetLineWidth(1);
    // Title
    //  MultiCell(width, height, content, border, nextline parametters, alignement[c - center], fill)
    $pdf-> MultiCell(170, 9, $title, false, 1, 'C', true);
    // Line break   
    $pdf->Ln(10);

    $pdf->SetTextColor(0,0,0,1);
    $w = $pdf->GetStringWidth($_SESSION['email'])+6;
    $pdf->SetX((170-$w)/2);
    $pdf-> Cell(60, 10, 'Reference No.:', 1, 0, false);
    $pdf->Cell($w, 10,  $_SESSION['stdNumber'], 1, 1, false);

    $pdf->SetX((170-$w)/2);
    $pdf->Cell(60, 10, 'Email:', 1, 0, false);
    $pdf->Cell($w, 10,  $_SESSION['email'], 1, 1, false);

    $pdf->SetX((170-$w)/2);
    $pdf->Cell(60, 10, 'Scholarship:', 1, 0, false);
    $pdf->Cell($w, 10, $_SESSION['scholarship'], 1, 1, false);

    $pdf->SetX((170-$w)/2);
    $pdf->Cell(60, 10, 'Last Name:', 1, 0, false);
    $pdf->Cell($w, 10,  $_SESSION['lname'], 1, 1, false);

    $pdf->SetX((170-$w)/2);
    $pdf->Cell(60, 10, 'Fisrt Name:', 1, 0, false);
    $pdf->Cell($w, 10, $_SESSION['fname'], 1, 1, false);
    
    $pdf->SetX((170-$w)/2);
    $pdf->Cell(60, 10, 'Middle Name:', 1, 0, false);
    $pdf->Cell($w, 10, $_SESSION['mname'], 1, 1, false);

    $pdf->SetX((170-$w)/2);
    $pdf->Cell(60, 10, 'Contact No.:', 1, 0, false);
    $pdf->Cell($w, 10, $_SESSION['contactNumber'], 1, 1, false);

    $pdf->SetX((170-$w)/2);
    $pdf->Cell(60, 10, 'School Year:', 1, 0, false);
    $pdf->Cell($w, 10, $_SESSION['sy'], 1, 1, false);

    $pdf->SetX((170-$w)/2);
    $pdf->Cell(60, 10, 'Sem:', 1, 0, false);
    $pdf->Cell($w, 10, $_SESSION['sem'], 1, 1, false);

    $pdf->SetX((170-$w)/2);
    $pdf->Cell(60, 10, 'Year Level:', 1, 0, false);
    $pdf->Cell($w, 10, $_SESSION['yearLevel'], 1, 1, false);

    $pdf->SetX((170-$w)/2);
    $pdf->Cell(60, 30, 'Course:', 1, 0, false);
    $pdf->MultiCell($w, 10, $_SESSION['course'], 1, 1, false);

    $pdf->SetX((170-$w)/2);
    $pdf->Cell(60, 10, 'Date of Registration:', 1, 0, false);
    $pdf->Cell($w, 10, $_SESSION['dateOfReg'], 1, 1, false);

    //$pdf->SetX((170-$w)/2);
    //$pdf->Cell(60, 10, 'QR', 1, 0, false);
    //$pdf->Cell( 40, 40, Image($_SESSION['imgData'], 
    //$pdf->GetX(), $pdf->GetY(), 33.78), 0, 0, 'L', false );
    //$pdf->Image($_SESSION['imgData'],$w, 100,  1, 1);
    $pdf->Output();
}
?>


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
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <TITLE>DRLCIFI - Registration Form</TITLE>
</head>




<body>
    <section class="vh-100 gradient-custom ">
        <div id="register" class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100 mb-100">
                <div class="col-12 col-lg-9 col-xl-7 mb-3">
                    <div class="card shadow-3-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h5 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center" style=" color: #980702">Download and Print this PDF file and present this at the registrar's office of 
                                <br>Dr. Ruby Lanting Casaul Educational Foundation, Inc.
                                located at
                            Tomas Cabiles, St., Tabaco City
                            </h5>
                            <form action="" name="loginform" id="loginform" method="POST">

                            
                                <div class="row">
                                    <div class="col-md-6  mb-4">
                                        <div class="form-group">
                                        <label class="form-label" for="refNo">Reference No.</label>
                                            <input type="text" class="form-control bg-light form-control-lg" value="<?= $_SESSION['stdNumber'] ?>" name="stdNo" >
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6  mb-4">              
                                        <div class="form-group">
                                        <label class="form-label">Email</label>
                                            <input type="email" class="form-control bg-light form-control-lg" value="<?= $_SESSION['email'] ?>" name="email"  >
                                            <span></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6  mb-4">
                                        <div class="form-group">
                                        <label class="form-label">Scholarship</label>
                                            <input type="text" class="form-control bg-light form-control-lg" value="<?= $_SESSION['scholarship'] ?>" name="scholarship" >
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6  mb-4">              
                                        <div class="form-group">
                                        <label class="form-label">Last Name</label>
                                            <input type="text" class="form-control bg-light form-control-lg" value="<?= $_SESSION['lname'] ?>" name="lname" id="lname">
                                            <span></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6  mb-4">
                                        <div class="form-group">
                                        <label class="form-label">First Name</label>
                                            <input type="text" class="form-control bg-light form-control-lg" value="<?= $_SESSION['fname'] ?>" name="fname" id="fname"  >
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6  mb-4">              
                                        <div class="form-group">
                                        <label class="form-label">Middle Name</label>
                                            <input type="text" class="form-control bg-light form-control-lg" value="<?= $_SESSION['mname'] ?>" name="mname" id="mname"  >
                                            <span></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6  mb-4">
                                        <div class="form-group">
                                        <label class="form-label">School Year</label>
                                            <input type="text" class="form-control bg-light form-control-lg" value="<?= $_SESSION['sy'] ?>" name="sy" id="sy"  >
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6  mb-4">              
                                        <div class="form-group">
                                        <label class="form-label">Sem</label>
                                            <input type="text" class="form-control bg-light form-control-lg" value="<?= $_SESSION['sem'] ?>" name="sem" id="sem"  >
                                            <span></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6  mb-4">
                                        <div class="form-group">
                                        <label class="form-label">Year Level</label>
                                            <input type="text" class="form-control bg-light form-control-lg" value="<?= $_SESSION['yearLevel'] ?>" name="yearLevel" >
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6  mb-4">
                                        <div class="form-group">
                                        <label class="form-label">Contact Number</label>
                                            <input type="tel" class="form-control bg-light form-control-lg" value="<?= $_SESSION['contactNumber'] ?>" name="contactNumber" >
                                            <span></span>
                                        </div>
                                    </div>
                                
                                </div>

                                <div class="row">
                                    <div class="col-md-6  mb-4">
                                        <div class="form-group">
                                        <label class="form-label">Course</label>
                                            <input type="text" class="form-control bg-light form-control-lg" value="<?= $_SESSION['course'] ?>" name="course"  >
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6  mb-4">              
                                        <div class="form-group">
                                        <label class="form-label">Date of Registration</label>
                                            <input type="text"  class="form-control bg-light form-control-lg" value="<?= $_SESSION['dateOfReg'] ?>" name="dateOfReg" >
                                            <span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col text-center">
                                    <p style="color: gray;" class="label label-info">Note: Never miss your saved PDF file of this application form</p>
                                    <button type="submit" style=" background: #980702" class="btn btn-primary btn-lg">Save PDF</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>