<?php
require('fpdf185/fpdf.php');
include('connection.php');

//Query to get data from the database
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

//Create a new PDF document
$pdf = new FPDF();
$pdf->AddPage();

//Set font and font size
$pdf->SetFont('Arial','B',12);

//Loop through the data and add each row to the PDF document
while ($row = mysqli_fetch_assoc($result)) {
    $pdf->Cell(40,10,$row['id'],1);
    $pdf->Cell(40,10,$row['fname'],1);
    $pdf->Cell(40,10,$row['lname'],1);
    $pdf->Cell(40,10,$row['email'],1);
    $pdf->Cell(40,10,$row['password'],1);
    $pdf->Cell(40,10,$row['GENDER'],1);
    $pdf->Ln();
}

//Output the PDF document to the browser
$pdf->Output();
?>
