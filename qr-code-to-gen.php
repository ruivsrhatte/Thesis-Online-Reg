<?php
session_start();
if (!isset($filename)) {
	$filename = "author";
	if (isset($_POST['toPDF'])) {
		require('fpdf/fpdf.php');
		//$image['imgData'] = $_POST['userImage'];
		$qr =  $_POST['qr'];
		$_SESSION['stdNumber'] = $_POST['stdNo'];
		$_SESSION['email'] = $_POST['email'];
		$_SESSION['scholarship'] = $_POST['scholarship'];
		$_SESSION['lname'] = $_POST['lname'];
		$_SESSION['fname'] = $_POST['fname'];
		$_SESSION['mname'] = $_POST['mname'];
		$_SESSION['contactNumber'] = $_POST['contactNumber'];
		$_SESSION['sy'] = $_POST['sy'];
		$_SESSION['sem'] = $_POST['sem'];
		$_SESSION['yearLevel'] = $_POST['yearLevel'];
		$_SESSION['course'] = $_POST['course'];
		$_SESSION['dateOfReg'] = $_POST['dateOfReg'];
		$note = "         To be officially enrolled, Download and Print this PDF file and present this at the registrar's office of Dr. Ruby Lanting Casaul Educational Foundation, Inc. located at Tomas Cabiles, St., Tabaco City";

		$schoolName1 = "Dr. Ruby Lanting Casaul Educational Foundation, Inc.";
		$schoolName2 = "Romeo B. Casaul Technological Institute Foundation, Inc.";
		$address = "Tomas Cabiles, St., Tabaco City";
		$telNo = "Tel. No. (052) 203-0244";
		$title = "Personal Information";

		$pdf = new FPDF();

		$pdf->AddPage();
		// Logo
		$pdf->Image('img/LOGO-CASAUL1.png', 37.50, 10, 16);
		$pdf->Image('img/Screenshot_20190304_181609.png', 155, 10, 17.30);

		//SchoolName1
		$pdf->SetFont('Arial', 'B', 11);
		$pdf->SetTextColor(0, 0, 139);
		// Move to the right
		$pdf->Cell(80);
		$pdf->Cell(30, 10, $schoolName1, 0, 1, 'C');

		//SchoolName2
		$pdf->SetFont('Arial', 'B', 9);
		$pdf->SetTextColor(128, 0, 0);
		$pdf->Cell(80);
		$pdf->Cell(30, 0, $schoolName2, 0, 1, 'C');

		//Address
		$pdf->SetFont('Arial', false, 9);
		$pdf->SetTextColor(128, 0, 0);
		$pdf->Cell(80);
		$pdf->Cell(30, 10, $address, 0, 1, 'C');

		//Tel. No.
		$pdf->SetFont('Arial', false, 9);
		$pdf->SetTextColor(0, 0, 0);
		$pdf->Cell(80);
		$pdf->Cell(30, 0, $telNo, 0, 1, 'C');
		$pdf->Ln(10);

		//Note
		$pdf->SetFont('Arial', false, 11);
		$pdf->SetDrawColor(221, 221, 221, 1);
		$pdf->SetFillColor(255, 255, 255, 1);
		$pdf->SetTextColor(41, 61, 61);
		// Move to the right
		$pdf->Cell(23);
		$pdf->MultiCell(150, 5, $note, false, 1, 'J', false);

		// QR CODE  
		$pdf->Ln(5);
		$pdf->Image($qr, 134, $pdf->GetY(), 25);
		$pdf->Ln(10);

		//Personal Info
		$pdf->SetFont('Arial', 'B', 14);
		$pdf->SetDrawColor(221, 221, 221, 1);
		$pdf->SetFillColor(255, 255, 255, 1);
		$pdf->SetTextColor(41, 61, 61);
		// Move to the right
		$pdf->Cell(50);
		$pdf->Cell(35, 15, $title, 0, 1, 'C');

		// Arial bold 15
		$pdf->SetFont('Arial', false, 12);
		// Calculate width of title and position
		$w = $pdf->GetStringWidth($note);
		// Colors of frame, background and text
		$pdf->SetDrawColor(221, 221, 221, 1);
		$pdf->SetFillColor(255, 255, 255, 1);
		$pdf->SetTextColor(0, 0, 0, 1);
		// Thickness of frame (1 mm)
		$pdf->SetLineWidth(1);
		// Title
		//  MultiCell(width, height, content, border, nextline parametters, alignement[c - center], fill)

		$pdf->SetTextColor(0, 0, 0, 1);
		$w = $pdf->GetStringWidth($_SESSION['email']) + 6;
		$pdf->SetX((150 - $w) / 2);
		$pdf->Cell(60, 10, 'Reference No.:', 1, 0, false);
		$pdf->Cell($w, 10,  $_SESSION['stdNumber'], 1, 1, false);

		$pdf->SetX((150 - $w) / 2);
		$pdf->Cell(60, 10, 'Date of Registration:', 1, 0, false);
		$pdf->Cell($w, 10, $_SESSION['dateOfReg'], 1, 1, false);

		$pdf->SetX((150 - $w) / 2);
		$pdf->Cell(60, 10, 'Email:', 1, 0, false);
		$pdf->Cell($w, 10,  $_SESSION['email'], 1, 1, false);

		$pdf->SetX((150 - $w) / 2);
		$pdf->Cell(60, 10, 'Scholarship:', 1, 0, false);
		$pdf->Cell($w, 10, $_SESSION['scholarship'], 1, 1, false);

		$pdf->SetX((150 - $w) / 2);
		$pdf->Cell(60, 10, 'Last Name:', 1, 0, false);
		$pdf->Cell($w, 10,  $_SESSION['lname'], 1, 1, false);

		$pdf->SetX((150 - $w) / 2);
		$pdf->Cell(60, 10, 'Fisrt Name:', 1, 0, false);
		$pdf->Cell($w, 10, $_SESSION['fname'], 1, 1, false);

		$pdf->SetX((150 - $w) / 2);
		$pdf->Cell(60, 10, 'Middle Name:', 1, 0, false);
		$pdf->Cell($w, 10, $_SESSION['mname'], 1, 1, false);

		$pdf->SetX((150 - $w) / 2);
		$pdf->Cell(60, 10, 'Contact No.:', 1, 0, false);
		$pdf->Cell($w, 10, $_SESSION['contactNumber'], 1, 1, false);

		$pdf->SetX((150 - $w) / 2);
		$pdf->Cell(60, 10, 'School Year:', 1, 0, false);
		$pdf->Cell($w, 10, $_SESSION['sy'], 1, 1, false);

		$pdf->SetX((150 - $w) / 2);
		$pdf->Cell(60, 10, 'Sem:', 1, 0, false);
		$pdf->Cell($w, 10, $_SESSION['sem'], 1, 1, false);

		$pdf->SetX((150 - $w) / 2);
		$pdf->Cell(60, 10, 'Year Level:', 1, 0, false);
		$pdf->Cell($w, 10, $_SESSION['yearLevel'], 1, 1, false);

		$pdf->SetX((150 - $w) / 2);
		//$h = $pdf->GetY($_SESSION['course']);
		//$Y= $pdf->GetY($_SESSION['course']);
		//$Y= 10;
		//$H = $pdf->GetY($_SESSION['course']);
		//$height = $H - $Y;
		//$H=$pdf->MultiCell($w, 10, $_SESSION['course'], 1, 1, false);
		$pdf->Cell(60, 40, 'Course:', 1, 0, false);
		$pdf->MultiCell($w, 10, $_SESSION['course'], 1, 1, false);
		//$Y=$H;
		// $pdf->SetX((150-$w)/2);
		//$pdf->Cell( 40, 40, Image($qr, 
		//$pdf->GetX(), $pdf->GetY(), 33.78), 0, 0, 'L', false );

		//$pdf->Image($qr,$w, 100,  1, 1);
		$pdf->Output();
	}
}


$f = "visit.php";
if (!file_exists($f)) {
	touch($f);
	$handle =  fopen($f, "w");
	fwrite($handle, 0);
	fclose($handle);
}

include('libs/phpqrcode/qrlib.php');

function getUsernameFromEmail($email)
{
	$find = '@';
	$pos = strpos($email, $find);
	$username = substr($email, 0, $pos);
	return $username;
}

if (isset($_POST['submit'])) {
	//$file_encoded = base64_encode(file_get_contents($codeContents)); //this is stringed data. save this in database. 
	$tempDir = 'temp/';
	$email = $_POST['email'];
	$stdNumber =  $_POST['stdNo'];
	$filename = $stdNumber;
	$codeContents = 'mailto:' . $stdNumber . '?subject=' . urlencode($email);

	QRcode::png($codeContents, $tempDir . '' . $filename . '.png', QR_ECLEVEL_L, 5);
}
?>
<!DOCTYPE html>

<head>
	<title>(QR) Code Generator</title>
	<link rel="shortcut icon" type="image/x-icon" href="logo.ico" />
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<link href="css/registration.css" rel="stylesheet" type="text/css" />

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<section class="vh-100 gradient-custom ">
	<div id="download" class="container py-5 h-100">
		<div class="row justify-content-center align-items-center h-100 mb-100">
			<div class="col-12 col-lg-9 col-xl-7 mb-3">
				<div class="card shadow-3-strong card-registration" style="border-radius: 15px;">
					<div class="card-body p-4 p-md-5">
						<h3 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center">(QR) Code Generator</h3>
						<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] . '?file=' . $filename); ?>">
							<!-- START OF QR CODE IMAGE-->
							<div class="mb-4">
								<label class="col-12 mb-5 text text-secondary">
									<b>Note:</b>
									<br>
									Click the <b>"Generate"</b> button below to generate your QR Code.<br>
									Once your QR code is successfully generated,
									click the <b>"Download PDF File"</b> button below your generated QR Code image.
								</label>
								<center>
									<div class="qrframe" style="border:2px solid black; width:210px; height:210px;">
										<input type="hidden" name="qr" value="<?php echo 'temp/' . @$filename . '.png' ?>" />
										<?php echo '<img src="temp/' . @$filename . '.png" style="width:200px; height:200px;"><br>'; ?>
									</div>
									<button href="" class="btn btn-primary submitBtn" type="submit" name="toPDF" style="width:210px; margin:5px 0;">Download PDF File</button>
								</center>
							</div>

							<!-- START OF SESSIONED DATA-->
							<div class="row" hidden>
								<div class="col-md-6  mb-4">
									<div class="form-group">
										<label class="form-label" for="refNo">Reference No.</label>
										<input type="text" class="form-control bg-light form-control-lg" value="<?= $_SESSION['stdNumber'] ?>" name="stdNo">
										<span></span>
									</div>
								</div>
								<div class="col-md-6  mb-4">
									<div class="form-group">
										<label class="form-label">Email</label>
										<input type="email" class="form-control bg-light form-control-lg" value="<?= $_SESSION['email'] ?>" name="email">
										<span></span>
									</div>
								</div>
							</div>

							<div class="row" hidden>
								<div class="col-md-6  mb-4">
									<div class="form-group">
										<label class="form-label">Scholarship</label>
										<input type="text" class="form-control bg-light form-control-lg" value="<?= $_SESSION['scholarship'] ?>" name="scholarship">
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

							<div class="row" hidden>
								<div class="col-md-6  mb-4">
									<div class="form-group">
										<label class="form-label">First Name</label>
										<input type="text" class="form-control bg-light form-control-lg" value="<?= $_SESSION['fname'] ?>" name="fname" id="fname">
										<span></span>
									</div>
								</div>
								<div class="col-md-6  mb-4">
									<div class="form-group">
										<label class="form-label">Middle Name</label>
										<input type="text" class="form-control bg-light form-control-lg" value="<?= $_SESSION['mname'] ?>" name="mname" id="mname">
										<span></span>
									</div>
								</div>
							</div>

							<div class="row" hidden>
								<div class="col-md-6  mb-4">
									<div class="form-group">
										<label class="form-label">School Year</label>
										<input type="text" class="form-control bg-light form-control-lg" value="<?= $_SESSION['sy'] ?>" name="sy" id="sy">
										<span></span>
									</div>
								</div>
								<div class="col-md-6  mb-4">
									<div class="form-group">
										<label class="form-label">Sem</label>
										<input type="text" class="form-control bg-light form-control-lg" value="<?= $_SESSION['sem'] ?>" name="sem" id="sem">
										<span></span>
									</div>
								</div>
							</div>

							<div class="row" hidden>
								<div class="col-md-6  mb-4">
									<div class="form-group">
										<label class="form-label">Year Level</label>
										<input type="text" class="form-control bg-light form-control-lg" value="<?= $_SESSION['yearLevel'] ?>" name="yearLevel">
										<span></span>
									</div>
								</div>
								<div class="col-md-6  mb-4">
									<div class="form-group">
										<label class="form-label">Contact Number</label>
										<input type="tel" class="form-control bg-light form-control-lg" value="<?= $_SESSION['contactNumber'] ?>" name="contactNumber">
										<span></span>
									</div>
								</div>

							</div>

							<div class="row" hidden>
								<div class="col-md-6  mb-4">
									<div class="form-group">
										<label class="form-label">Course</label>
										<input type="text" class="form-control bg-light form-control-lg" value="<?= $_SESSION['course'] ?>" name="course">
										<span></span>
									</div>
								</div>
								<div class="col-md-6  mb-4">
									<div class="form-group">
										<label class="form-label">Date of Registration</label>
										<input type="text" class="form-control bg-light form-control-lg" value="<?= $_SESSION['dateOfReg'] ?>" name="dateOfReg">
										<span></span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<button type="submit" name="submit" class="btn btn-primary btn-lg btn-block" style=" background: #980702" onClick="">Generate</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

</html>