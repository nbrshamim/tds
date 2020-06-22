<?php
/**
 * Author: Shahana Yasmin Chowdhury
 * E-mail: shahana.yc@gmail.com
 * National Board of Revenue(NBR)
 * Date: 10/30/2018
 * Time: 3:48 PM
 */

//require_once '../PHPExcel/IOFactory.php';
include('../../lib/PHPExcel/IOFactory.php');
//$objPHPExcel = PHPExcel_IOFactory::load('../testImageRead.xlsx');
$objPHPExcel = PHPExcel_IOFactory::load($uploadFilePath);
//pr($objPHPExcel);

$i = 1;
$imgUploadFileName[0] = 0;
foreach ($objPHPExcel->getActiveSheet()->getDrawingCollection() as $drawing) {
    if ($drawing instanceof PHPExcel_Worksheet_MemoryDrawing) {
        ob_start();
        call_user_func(
            $drawing->getRenderingFunction(),
            $drawing->getImageResource()
        );
        $imageContents = ob_get_contents();
        //pr($drawing->getImageIndex());
        //pr($imageContents); die;
        ob_end_clean();
        switch ($drawing->getMimeType()) {
            case PHPExcel_Worksheet_MemoryDrawing::MIMETYPE_PNG :
                    $extension = 'png'; break;
            case PHPExcel_Worksheet_MemoryDrawing::MIMETYPE_GIF:
                    $extension = 'gif'; break;
            case PHPExcel_Worksheet_MemoryDrawing::MIMETYPE_JPEG :
                    $extension = 'jpg'; break;
        }
    } else {
        $zipReader = fopen($drawing->getPath(),'r');
        $imageContents = '';
        while (!feof($zipReader)) {
            $imageContents .= fread($zipReader,1024);
        }
        fclose($zipReader);
        $extension = $drawing->getExtension();
    }
    $xyPos = $drawing->getCoordinates(); //It gives the COL# and ROW# of a cell, B10.
    $i = (substr($xyPos, 1)); //this line will remove the column#, keep only row#, when xyPos=B10, it gives $i=10;
    
    if(!isset($imgUploadPath)){
        $imgUploadFileName[$i] = $_SERVER['DOCUMENT_ROOT']."/".APP_ROOT.'/media/uploads/img/00_Image_'.$i.'.'.$extension;
    }else{
        $imgUploadFileName[$i] = $imgUploadPath.'_Image_'.$i.'.'.$extension;
    }
    //pr($imgUploadFileName[$i]); 
    //pr($drawing->getCoordinates());
    file_put_contents($imgUploadFileName[$i],$imageContents);
    //++$i;
}

//Database Operation
//$db = Database::getInstance();
//$mysqli = $db->getConnection();

$actSheet = $objPHPExcel->getActiveSheet();
    $key =0;
    foreach ($actSheet->getRowIterator() as $row){   
        if($key==0){$key++; continue;}
        $cellIterator = $row->getCellIterator();

        // This loops all cells, even if it is not set.
        // By default, only cells that are set will be iterated.
        $cellIterator->setIterateOnlyExistingCells(false);
        $ii = 0;
        foreach ($cellIterator as $cell) {
            //pr($cell->getValue());
          $xlCell[$ii++] = $cell->getValue();
        }
        
        
        $name           = isset($xlCell[0]) ? $xlCell[0] : '';
        $father         = isset($xlCell[1]) ? $xlCell[1] : '';
        $mother         = isset($xlCell[2]) ? $xlCell[2] : '';
        $dob            = isset($xlCell[3]) ? date("Y-m-d",strtotime($xlCell[3])) : '';
        $passport_old   = isset($xlCell[4]) ? $xlCell[4] : '';
        $passport_no    = isset($xlCell[5]) ? $xlCell[5] : '';
        $arrival_date   = isset($xlCell[6]) ? date("Y-m-d h:i:s",strtotime($xlCell[6])) : '';
        $departure_date = isset($xlCell[7]) ? date("Y-m-d h:i:s",strtotime($xlCell[7])) : '';
        $purpose        = isset($xlCell[8]) ? $xlCell[8] : '';
        $country        = isset($xlCell[9]) ? $xlCell[9] : '';
        $country_last   = isset($xlCell[10]) ? $xlCell[10] : '';
        $occupation     = isset($xlCell[11]) ? $xlCell[11] : '';
        $address_bd     = isset($xlCell[12]) ? $xlCell[12] : '';
        $visa_type      = isset($xlCell[13]) ? $xlCell[13] : '';
        if(isset($imgUploadFileName[$key+1])){
            //pr($imgUploadFileName[$key-1]);
            $patH = $_SERVER['DOCUMENT_ROOT']."/".APP_ROOT.'/media/uploads/';            
            $imgFname = (substr($imgUploadFileName[$key+1], strlen($patH))); //Remove file path, keep only file name
            
            //pr($key);
            $sql = sprintf("INSERT into fp_information(`name`,`father`,`mother`,`dob`,`passport_old`,`passport_no`,`arrival_date`,`departure_date`,`purpose`,`country`,`country_last`,`occupation`,`address_bd`,`visa_type`,`picture`,`data_file`)");            
            $sql .= sprintf("values('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')",$name,$father,$mother,$dob,$passport_old,$passport_no,$arrival_date,$departure_date,$purpose,$country,$country_last,$occupation,$address_bd,$visa_type,$imgFname,$fileName);
        }
        else{
            $sql = sprintf("INSERT into fp_information(`name`,`father`,`mother`,`dob`,`passport_old`,`passport_no`,`arrival_date`,`departure_date`,`purpose`,`country`,`country_last`,`occupation`,`address_bd`,`visa_type`,`data_file`)");
            $sql .= sprintf("values('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')",$name,$father,$mother,$dob,$passport_old,$passport_no,$arrival_date,$departure_date,$purpose,$country,$country_last,$occupation,$address_bd,$visa_type,$fileName);
        }
        $key++;
        $status = $db->insertRawQuery($sql);       
        if(!$status){
                    throw new Exception("Insertion failure");
                }
        //pr($key);        
        //pr($sql);        
    }



//die;