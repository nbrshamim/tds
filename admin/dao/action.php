<?php
/**
 * Author: Jakir Hosen Khan.
 * E-mail: jkr.h.khan@gmail.com
 * Date: 11/11/2018
 * Time: 10:54 AM
 */
require_once('../dbo/Database.php');

$db = Database::getInstance();
$mysqli = $db->getConnection();

$suspectInfo = array();
if(!empty($_GET) && isset($_GET['passport_no']) && $_GET['passport_no']){
    $suspectInfo = $db->getRow('suspects', array(),array('passport_no'=>$_GET['passport_no']),array());
}
if (!empty($_POST)) {
    $table = "suspects";
    $dataObj = array();
    try{
        if(isset($_POST['id'])){
            $dataObj['id'] = mysqli_real_escape_string($mysqli,trim ($_POST['id']));
        }else{
            throw new Exception("Suspected Employee Not found.");
        }
//        pr($_POST);die;
        if(isset($_POST['action'])){$dataObj['action'] = mysqli_real_escape_string($mysqli,trim ($_POST['action']));}
        if(isset($_POST['penalty'])){$dataObj['penalty'] = mysqli_real_escape_string($mysqli,trim ($_POST['penalty']));}
        if(isset($_POST['penalty_to'])){$dataObj['penalty_to'] = mysqli_real_escape_string($mysqli,trim ($_POST['penalty_to']));}
        if(isset($_POST['authority'])){$dataObj['authority'] = mysqli_real_escape_string($mysqli,trim ($_POST['authority']));}
        $dataObj['action_date'] = date("Y-m-d");
        $dataObj['status'] = TAKEN_ACTION;
//        pr($dataObj);die;
        if(!$db->update($table, $dataObj['id'], $dataObj, true)){
            throw new Exception("Insertion Error.");
        }

        $_SESSION['flushMessage'] = "Action Successfully Added";
        $_SESSION['flushStatus'] = true;
        $mysqli->commit();
        redirectPage('admin.php?page=detectList');

    } catch (Exception $e){
        $mysqli->rollback();
        $suspectInfo = $_POST;
        $_SESSION['flushMessage'] = $e->getMessage();
        $_SESSION['flushStatus'] = false;
    }

}

