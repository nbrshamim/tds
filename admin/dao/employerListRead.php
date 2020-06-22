<?php
/**
 * Created by PhpStorm.
 * User: khan
 * Date: 11/7/2018
 * Time: 1:47 PM
 */
require_once('../dbo/Database.php');

$db = Database::getInstance();
$mysqli = $db->getConnection();
$employerInfo = array();
$employeeInfo = array();
if(!empty($_GET) && isset($_GET['passport_no']) && $_GET['passport_no']){
    $employerInfo = $db->getRows('employer', array(),array('passport_no'=>$_GET['passport_no']),array());
    $employeeInfo = $db->getRow('fp_information', array(),array('passport_no'=>$_GET['passport_no']),array());
}
