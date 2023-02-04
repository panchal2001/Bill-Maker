<?php
require_once 'FPDF/fpdf.php';
require_once 'conn.php';
$sql= "SELECT * FROM shree";
$query =mysqli_query($conn,$sql);
    
    if(isset($_POST['btn_pdf']))
    {
    $pdf = new FPDF(orientation: 'p', unit: 'mm', size: 'a4');
    $pdf->SetFont(family: 'arial', style: 'b', size: '14');
    $pdf->AddPage();
    $pdf->Cell(w:'40',h:'10',txt:'Bill number',border:'1',ln:'0',align:'C');
    $pdf->Cell(w:'40',h:'10',txt:'date',border:'1',ln:'0',align:'C');
    $pdf->Cell(w:'40',h:'10',txt:'DIVISTION',border:'1',ln:'0',align:'C');
    $pdf->Cell(w:'40',h:'10',txt:'Total',border:'1',ln:'0',align:'C');
    

    while($row=mysqli_fetch_assoc($query))
    {
       $pdf->Cell(w:'25',h:'10',txt:'hello',border:'1',ln:'0',align:'c');
      
    }
    $pdf->Output();
    }
?>