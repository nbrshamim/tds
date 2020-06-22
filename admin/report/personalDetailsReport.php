<?php
/**
 * Author: Jakir Hosen Khan.
 * E-mail: jkr.h.khan@gmail.com
 * Date: 10/29/2018
 * Time: 4:38 PM
 */
require_once ("dao/personalDetailsDataRead.php");
require_once ("../lib/PDF.php");
//pr($fpInfo);die;

try{
    $pdf = new PDF();
    $title = "Monthly Travel Details :";
    $title .= (isset($fpInfo['0']['name']))?$fpInfo['0']['name']:"";
    $pdf->setTitle($title);
// Column headings
    $header = array('Arrival', 'Departure', 'Visa Type', 'Last Visited Country', 'Purpose of Travel');
    $columns = array('arrival_date', 'departure_date', 'visa_type','country_last','purpose');
// Data loading

    $data = $pdf->LoadData($fpInfo,$columns);
    $pdf->SetFont('Arial','',10);
    $pdf->AddPage();
//    $pdf->Cell(10,10,'Father Name',0,0,'L');
    $pdf->Cell(150,0,"Father Name   : ".$fpInfo['0']['father'],0,0,'L');
    $pdf->Ln();
    $pdf->Cell(150,10,"Mother Name  : ".$fpInfo['0']['mother'],0,0,'L');
    $pdf->Ln();
    $pdf->Cell(150,0,"Country       : ".$fpInfo['0']['country'],0,0,'L');
    $pdf->Ln();
    $pdf->Cell(150,10,"Passport No. : ".$fpInfo['0']['passport_no'],0,0,'L');
    $pdf->Ln();
    $pdf->Cell(150,0,"Total Travel  : ".count($fpInfo),0,0,'L');
    $pdf->Ln();
    $pdf->SetFontSize(16);
    $pdf->Cell(10,10,"Travel History:",0,0,'L');
    $pdf->Ln();
    $pdf->SetFontSize(9);
    $pdf->BasicTable($header,$data);
//    $pdf->AddPage();
//    $pdf->ImprovedTable($header,$data);
//    $pdf->AddPage();
//    $pdf->FancyTable($header,$data);
    ob_start();
    $pdf->Output();
}
catch (Exception $e){
    pr($e->getMessage());
}
