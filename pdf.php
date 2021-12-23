<?php
session_start();
if(isset($_POST['submit'])){
    require('fpdf/fpdf.php');
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
    $title = 'User Report';

    $pdf = new FPDF();
    $pdf -> AddPage();
    $pdf->SetTitle($title);
    // Arial bold 15
    $pdf->SetFont('Arial','B',15);
    // Calculate width of title and position
    $w = $pdf->GetStringWidth($title)+6;
    $pdf->SetX((210-$w)/2);
    // Colors of frame, background and text
    $pdf->SetDrawColor(221,221,221,1);
    $pdf->SetFillColor(10,158,0,1);
    $pdf->SetTextColor(255,255,255,1);
    // Thickness of frame (1 mm)
    $pdf->SetLineWidth(1);
    // Title
    // Cell(width, height, content, border, nextline parametters, alignement[c - center], fill)
    $pdf->Cell($w, 9, $title, 1, 1, 'C', true);
    // Line break
    $pdf->Ln(10);

    $pdf->SetTextColor(0,0,0,1);
    $w = $pdf->GetStringWidth($course)+6;
    $pdf->SetX((170-$w)/2);
    $pdf->Cell(40, 10, 'Name:', 1, 0, 'C');
    $pdf->Cell($w, 10,  $_SESSION['stdNumber'], 1, 1, 'C');

   
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

    $pdf->SetX((170-$w)/2);
    $pdf->Cell(40, 10, 'DOB:', 1, 0, 'C');
    $pdf->Cell($w, 10, $email, 1, 1, 'C');

    $pdf->SetX((170-$w)/2);
    $pdf->Cell(40, 10, 'Job:', 1, 0, 'C');
    $pdf->Cell($w, 10, $scholarshipb, 1, 1, 'C');

    $pdf->SetX((170-$w)/2);
    $pdf->Cell(40, 10, 'Job:', 1, 0, 'C');
    $pdf->Cell($w, 10, $lname, 1, 1, 'C');

    
    $pdf->SetX((170-$w)/2);
    $pdf->Cell(40, 10, 'Job:', 1, 0, 'C');
    $pdf->Cell($w, 10, $fname, 1, 1, 'C');


    $pdf->SetX((170-$w)/2);
    $pdf->Cell(40, 10, 'Job:', 1, 0, 'C');
    $pdf->Cell($w, 10, $mname, 1, 1, 'C');


    $pdf->SetX((170-$w)/2);
    $pdf->Cell(40, 10, 'Job:', 1, 0, 'C');
    $pdf->Cell($w, 10, $contactNumber, 1, 1, 'C');


    $pdf->SetX((170-$w)/2);
    $pdf->Cell(40, 10, 'Job:', 1, 0, 'C');
    $pdf->Cell($w, 10, $sy, 1, 1, 'C');


    $pdf->SetX((170-$w)/2);
    $pdf->Cell(40, 10, 'Job:', 1, 0, 'C');
    $pdf->Cell($w, 10, $sem, 1, 1, 'C');


    $pdf->SetX((170-$w)/2);
    $pdf->Cell(40, 10, 'Job:', 1, 0, 'C');
    $pdf->Cell($w, 10, $yearLevel, 1, 1, 'C');


    $pdf->SetX((170-$w)/2);
    $pdf->Cell(40, 10, 'Job:', 1, 0, 'C');
    $pdf->Cell($w, 10, $course, 1, 1, 'C');


    $pdf->SetX((170-$w)/2);
    $pdf->Cell(40, 10, 'Job:', 1, 0, 'C');
    $pdf->Cell($w, 10, $dateOfReg, 1, 1, 'C');
    $pdf->Output();
}
?>