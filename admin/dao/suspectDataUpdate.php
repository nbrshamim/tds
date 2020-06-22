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
//$districtMap = $db->dataMap('districts', array('id'=>''), $where = array());
//$upazalaMap = $db->dataMap('upazila', array(), $where = array());

$tanaMap = $db->dataMap("upazila", array('key' => 'id', 'value' => 'name_en'));
$districtMap = $db->dataMap("districts", array('key' => 'id', 'value' => 'name_en'));
