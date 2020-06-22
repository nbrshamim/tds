<?php
/**
 * Author: Jakir Hosen Khan.
 * E-mail: jkr.h.khan@gmail.com
 * National Board of Revenue(NBR)
 * Date: 4/25/2018
 * Time: 3:34 PM
 */

require_once('../config/config.php');
require_once('../dbo/Database.php');


$db = Database::getInstance();
$mysqli = $db->getConnection();
$where = array();
$dataUsers = array();
if(isset($_GET['district'])){
    $tanaMap = $db->dataMap("upazila", array('key' => 'id', 'value' => sprintf("name_en")),array('district'=>intval($_GET['district'])));
    echo json_encode($tanaMap);
}
$db->closeConnection();
die;

