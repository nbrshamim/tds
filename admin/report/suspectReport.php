<?php
/**
 * Author: Jakir Hosen Khan.
 * E-mail: jkr.h.khan@gmail.com
 * Date: 11/6/2018
 * Time: 12:35 PM
 */
require_once ("dao/suspectDataRead.php");
require_once ("../lib/PDF.php");
//pr($fpInfo);die;

try{
    $pdf = new PDF();
// Column headings
    $header = array('Name', 'Passport No','Visa Type', 'Country', 'Total Arrival','Occupation');
    $columns = array('name', 'passport_no','visa_type', 'country', 'TotalArrival','occupation');
// Data loading
    $pdf->setTitle("Suspect List [Arrival between ".$stDate." - ".$endDate."]");
    $data = $pdf->LoadData($fpInfo,$columns);
    $pdf->SetFont('Arial','',10);
    $pdf->AddPage();
    $pdf->BasicTable($header,$data);
//    $pdf->AddPage();
//    $pdf->ImprovedTable($header,$data);
//    $pdf->AddPage();
//    $pdf->FancyTable($header,$data);
    ob_start();
    $pdf->Output("I",sprintf("SuspectList%s_%s.pdf",$stDate,$endDate));
}
catch (Exception $e){
    pr($e->getMessage());
}
