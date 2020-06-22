<?php
/**
 * Author: Jakir Hosen Khan.
 * E-mail: jkr.h.khan@gmail.com
 * Date: 11/7/2018
 * Time: 10:44 AM
 */


require_once('../dbo/Database.php');

$db = Database::getInstance();
$mysqli = $db->getConnection();
//pr($_GET['passport_no']);die;
$feInfo = array();
if(!empty($_GET) && isset($_GET['passport_no']) && $_GET['passport_no']){
    $fEmpInfo = $db->getRow('fp_information', array(),array('passport_no'=>$_GET['passport_no']),array());
}
//pr($fEmpInfo);die;
$tanaMap = $db->dataMap("upazila", array('key' => 'id', 'value' => 'name_en'));
$districtMap = $db->dataMap("districts", array('key' => 'id', 'value' => 'name_en'));


//pr($_POST);die;
if(!empty($_POST)){
    $table = "employer";
    $form = "Employer ";
    $dataObj = array();
    try{
        if(isset($_POST['id'])){$dataObj['id'] = mysqli_real_escape_string($mysqli,trim ($_POST['id']));}
        if(isset($_POST['passport_no'])){$dataObj['passport_no'] = mysqli_real_escape_string($mysqli,trim ($_POST['passport_no']));}
        if(isset($_POST['current_address'])){$dataObj['current_address'] = mysqli_real_escape_string($mysqli,trim ($_POST['current_address']));}
        if(isset($_POST['mobile'])){$dataObj['mobile'] = mysqli_real_escape_string($mysqli,trim ($_POST['mobile']));}
        if(isset($_POST['employer'])){$dataObj['employer'] = mysqli_real_escape_string($mysqli,trim ($_POST['employer']));}
        if(isset($_POST['company_name'])){$dataObj['company_name'] = mysqli_real_escape_string($mysqli,trim ($_POST['company_name']));}
        if(isset($_POST['bin'])){$dataObj['bin'] = mysqli_real_escape_string($mysqli,trim ($_POST['bin']));}
        if(isset($_POST['employer_mobile'])){$dataObj['employer_mobile'] = mysqli_real_escape_string($mysqli,trim ($_POST['employer_mobile']));}
        if(isset($_POST['employer_phone'])){$dataObj['employer_phone'] = mysqli_real_escape_string($mysqli,trim ($_POST['employer_phone']));}
        if(isset($_POST['tana'])){$dataObj['tana'] = mysqli_real_escape_string($mysqli,trim ($_POST['tana']));}
        if(isset($_POST['district'])){$dataObj['district'] = mysqli_real_escape_string($mysqli,trim ($_POST['district']));}

//pr($dataObj);die;
        $mysqli->autocommit(FALSE);
        if(!empty($dataObj)){
            if(!isset($dataObj['id'])){
                $userInsertStatus = $db->insert($table, $dataObj, true);
            }
            else{
                $userInsertStatus = $db->update($table, $dataObj['id'], $dataObj, true);
            }
            if($userInsertStatus && $userInsertStatus != 1){
                $msg = "Error: Employer Insertion Failed!";
                throw new Exception($msg);
            }
        }

        $_SESSION['flushMessage'] = "Employer successfully ".($dataObj['id'])?"Inserted!":"Updated";
        $_SESSION['flushStatus'] = true;
        $mysqli->commit();
        redirectPage('admin.php?page=employerList&passport_no='.$dataObj['passport_no']);

    } catch (Exception $e){
        pr($e);die;
        $mysqli->rollback();
        $employerInfo = $_POST;
        $_SESSION['flushMessage'] = $e->getMessage();
        $_SESSION['flushStatus'] = false;
    }
}
