<?php
/**
 * Author: Jakir Hosen Khan.
 * E-mail: jkr.h.khan@gmail.com
 * Date: 10/22/2018
 * Time: 3:53 PM
 */


require_once('../../config/config.php');
require_once('../../dbo/Database.php');
if($_POST){
    $db = Database::getInstance();
    $mysqli = $db->getConnection();
    $dataFileInfo = $db->getRow('data_file', array(),array('id'=>intval($_POST['id'])),array());
   
    //pr(id);
    try{
        if(empty($dataFileInfo)){throw new Exception("File not found");}
        $fileName = $dataFileInfo['name'];
		$binNumber = $dataFileInfo['bin_number'];
        $dir = $_SERVER['DOCUMENT_ROOT']."/".APP_ROOT.'/media/uploads/foreignPeopleInfo/';
        if(!file_exists($dir.$fileName)){throw new Exception("File not found");}
        //include('../../lib/SpreadsheetReader.php');
        ini_set('max_execution_time', 3000);
        $uploadFilePath = $dir."/" . $fileName;        
//        $Reader = new SpreadsheetReader($uploadFilePath);
//        $totalSheet = count($Reader->sheets());
        $mysqli->autocommit(FALSE);
        if(isset($uploadFilePath)){ //shahana   
                $newPath = $_SERVER['DOCUMENT_ROOT']."/".APP_ROOT.'/media/uploads/'.md5($dataFileInfo['id']);                                
                if (!is_dir($newPath)) { //create new directory by using xlsx file id in DB, to save image
                   mkdir($newPath, 0777, true);
                }
                $imgUploadPath = $newPath.'/i'.$fileName;
                require_once 'parseXLSXDataForTaxEmp.php';
        }
        $response = array();
        $status = $db->insertRawQuery(sprintf("UPDATE `data_file` SET `status`= %s,`import_date`='%s' WHERE id =%s;",IMPORTED,date("Y-m-d"),$dataFileInfo['id']));
        if(!$status){
            throw new Exception("Insertion failure");            
        }
        $mysqli->commit();
        $response['message'] = "Information has been successfully imported!";
        $response['status'] = true;
        //redirectPage('admin.php');



    }
    catch (Exception $ex){
        $mysqli->rollback();
        { //Recursively delete files if any error occured in DB entry
            $filess = glob($newPath . '/*');
            foreach ($filess as $filee) {
                    is_dir($filee) ? rmdir($filee) : unlink($filee);
            }	
            rmdir($newPath);
        }
        $response['message'] = $e->getMessage();
        $response['status'] = false;
    }
    echo json_encode($response);die;
}