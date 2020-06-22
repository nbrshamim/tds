<?php
/**
 * Author: Jakir Hosen Khan.
 * E-mail: jkr.h.khan@gmail.com
 * Date: 7/25/2018
 * Time: 12:33 PM
 */

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
        try{
            if (preg_match('/^fp_data_[0-9]{2}_[0-9]{4}$/D',$fileName)){
                throw new Exception("File Name is not allowed. File name should be 'fp_data_mm_yyyy'. ");
            }
            if(file_exists($dir.$fileName)){
                throw new Exception("File already uploaded.");
            }
            $uploader = new fileManager;
            $uploader->setAllowedExtensions($mimes);
            $uploader->setDestination($dir);
            $uploader->setFileName($fileName);
            $status = $uploader->upload($_FILES['csv_file']);
            if($status == 1) {
                ini_set('max_execution_time', 300000000);
                //Database Operation
                $db = Database::getInstance();
                $mysqli = $db->getConnection();
                $table = 'data_file';
                $isHistory = false;
                $form = 'Data File Upload ';
                if (isset($_POST['id'])){$dataObj['id'] = mysqli_real_escape_string($mysqli, trim($_POST['id']));}
                    $dataObj['name'] = $fileName;
					$dataObj['bin_number'] = $_SESSION['binNumber'];
                    $dataObj['upload_date'] = date("Y-m-d");
                    $dataObj['status'] = DRAFT;
                    $redirectPage = "admin.php?page=fList";
                    require_once("../dbo/saveData.php");
                } else {
                    throw new Exception($uploader->getError());
                }


        }
        catch (Exception $ex){
            $_SESSION['flushMessage'] = $ex->getMessage();
            $_SESSION['flushStatus'] = true;
        }
    }
}