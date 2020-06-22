<?php
/**
 * Author: Jakir Hosen Khan.
 * E-mail: jkr.h.khan@gmail.com
 * Date: 7/25/2018
 * Time: 12:33 PM
 */
//phpinfo(); die;

if($_FILES){
    $mimes = array('application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.oasis.opendocument.spreadsheet','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    if(in_array($_FILES["csv_file"]["type"],$mimes)){
        $dir = $_SERVER['DOCUMENT_ROOT']."/".APP_ROOT.'/media/uploads/foreignPeopleInfo/';
        if(!is_dir($dir)){
            mkdir($dir, 0777, true);
        }
        include('../lib/fileManager.php');
        include('../lib/SpreadsheetReader.php');
        $fileName = basename($_FILES['csv_file']['name']);
        $uploader = new fileManager;
        $uploader->setAllowedExtensions($mimes);
        $uploader->setDestination($dir);
        $uploader->setFileName($fileName);
        $status = $uploader->upload($_FILES['csv_file']);
        $isImageUpload = 1;
        if($status == 1){
            ini_set('max_execution_time', 3000);
            $uploadFilePath = $dir."" . $fileName;
            $Reader = new SpreadsheetReader($uploadFilePath);
            //pr($uploadFilePath);
            $totalSheet = count($Reader->sheets());
            if($isImageUpload==1 && isset($uploadFilePath)){ //shahana   
                $imgUploadPath = "..\media\uploads\img\i".$fileName;
                require_once 'uploadAndSaveImage.php';
            }            
            //Database Operation
            /*$db = Database::getInstance();
            $mysqli = $db->getConnection();
            
            for($i=0;$i<$totalSheet;$i++)
            {
                $Reader->ChangeSheet($i);
                foreach ($Reader as $key=>$Row)
                {
                    if($key==0){continue;}
                    $name           = isset($Row[0]) ? $Row[0] : '';
                    $father         = isset($Row[1]) ? $Row[1] : '';
                    $mother         = isset($Row[2]) ? $Row[2] : '';
                    $dob            = isset($Row[3]) ? date("Y-m-d",strtotime($Row[3])) : '';
                    $passport_old   = isset($Row[4]) ? $Row[4] : '';
                    $passport_no    = isset($Row[5]) ? $Row[5] : '';
                    $arrival_date   = isset($Row[6]) ? date("Y-m-d h:i:s",strtotime($Row[6])) : '';
                    $departure_date = isset($Row[7]) ? date("Y-m-d h:i:s",strtotime($Row[7])) : '';
                    $purpose        = isset($Row[8]) ? $Row[8] : '';
                    $country        = isset($Row[9]) ? $Row[9] : '';
                    $country_last   = isset($Row[10]) ? $Row[10] : '';
                    $occupation     = isset($Row[11]) ? $Row[11] : '';
                    $address_bd     = isset($Row[12]) ? $Row[12] : '';
                    $visa_type      = isset($Row[13]) ? $Row[13] : '';
                    $sql = sprintf("INSERT into fp_information(`name`,`father`,`mother`,`dob`,`passport_old`,`passport_no`,`arrival_date`,`departure_date`,`purpose`,`country`,`country_last`,`occupation`,`address_bd`,`visa_type`,`data_file`)");
                    $sql .= sprintf("values('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')",$name,$father,$mother,$dob,$passport_old,$passport_no,$arrival_date,$departure_date,$purpose,$country,$country_last,$occupation,$address_bd,$visa_type,$fileName);
//echo $sql;die;
                    $db->insertRawQuery($sql);

                }
            }*/
            //die;
            $_SESSION['flushMessage'] = "Information has been successfully imported!";
            $_SESSION['flushStatus'] = true;
            redirectPage('admin.php');
        }else{
            $error['error'] = $uploader->getError();
        }       
    }
}