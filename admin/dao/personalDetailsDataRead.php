<?php
/**
 * Author: Jakir Hosen Khan.
 * E-mail: jkr.h.khan@gmail.com
 * Date: 10/28/2018
 * Time: 2:40 PM
 *
 * Read Details list of arrival of Foreign employee From DB
 */
require_once('../dbo/Database.php');
$sVisit = 3;
if(isset($_GET['visit']) &&$_GET['visit']) {
    $sVisit = $_GET['visit'];
}
$conditions = sprintf(" where DATEDIFF( departure_date, arrival_date ) >= %s",$sVisit);
$sMonth = 1;
if(isset($_GET['month']) &&$_GET['month']) {
    $sMonth = $_GET['month'];
}
$endDate = date("Y-m-d");
$stDate = date("Y-m-d", strtotime($endDate.' -'.$sMonth.' months'));
$conditions .= sprintf(" and arrival_date >= '%s' and arrival_date <= '%s'",$stDate,$endDate);
if(isset($_GET['passport']) &&$_GET['passport']) {
    $sPassport = $_GET['passport'];
    $conditions .= " and i.passport_no like '%$sPassport%'";
}
$db = Database::getInstance();
$mysqli = $db->getConnection();
$valueField = sprintf("name_".$ln);
$fields = sprintf("i.`id` AS id, `name`, `father`, `mother`, `dob`, i.`passport_no`, `passport_old`, `arrival_date`, `departure_date`, `purpose`, `country`, `country_last`, `occupation`, `address_bd`, `visa_type`, `picture`, `data_file`,s.`status` AS `status`");
$query = sprintf("SELECT %s FROM fp_information i LEFT JOIN suspects s ON i.passport_no=s.passport_no %s;",$fields,$conditions);
$fpInfo = $db->executeRawQuery($query);
//pr($fpInfo);die;
