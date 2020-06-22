<?php
/**
 * Author: Jakir Hosen Khan.
 * E-mail: jkr.h.khan@gmail.com
 * Date: 11/7/2018
 * Time: 3:52 PM
 */
require_once('../../config/config.php');
require_once('../../dbo/Database.php');

$db = Database::getInstance();
$mysqli = $db->getConnection();
$status = 0;
if(!empty($_POST) && isset($_POST['passport_no'])&&$_POST['passport_no']){
    $query = sprintf("UPDATE suspects SET `status`=%s,detect_date='%s' WHERE passport_no='%s'",DETECTED,date("Y-m-d"),$_POST['passport_no']);
    $status = $db->insertRawQuery($query);
}
echo $status;
die;