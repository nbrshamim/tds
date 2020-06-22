<?php
/**
 * Author: Jakir Hosen Khan.
 * E-mail: jkr.h.khan@gmail.com
 * Date: 11/5/2018
 * Time: 3:45 PM
 */

require_once('../../dbo/Database.php');

$db = Database::getInstance();
$mysqli = $db->getConnection();
$status = 0;
if(!empty($_POST) && isset($_POST['passport_no'])&&$_POST['passport_no']){
    $query = sprintf("INSERT INTO `suspects` (`passport_no`,`suspect_date`,`status`) VALUES ('%s','%s','%s');",$_POST['passport_no'],date("Y-m-d"),1);
    $status = $db->insertRawQuery($query);
}
echo $status;
die;