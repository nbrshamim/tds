<?php
/**
 * Author: Jakir Hosen Khan.
 * E-mail: jkr.h.khan@gmail.com
 * Date: 11/11/2018
 * Time: 3:56 PM
 */
require_once('../dbo/Database.php');

$sMonth = (!empty($_GET)&&isset($_GET['month']))?$_GET['month']:3;
$sVisit = (!empty($_GET)&&isset($_GET['visit']))?$_GET['visit']:3;
$sPassport = (!empty($_GET)&&isset($_GET['passport']))?$_GET['passport']:'';
$sName = (!empty($_GET)&&isset($_GET['name']))?$_GET['name']:'';
$sVisaType = (!empty($_GET)&&isset($_GET['visa_type']))?$_GET['visa_type']:'';
$sCountry = (!empty($_GET)&&isset($_GET['country']))?$_GET['country']:'';

$sVisaType = '';
$sCountry = '';
$urlQryString = '&visit='.$sVisit;
$conditions = sprintf(" where DATEDIFF( departure_date, arrival_date ) >= %s and status=%s",$sVisit,TAKEN_ACTION);
if($sName) {
    $conditions .= " and name like '%$sName%' ";
    $urlQryString .='&name='.$sName;
}
$endDate = date("Y-m-d");
$stDate = date("Y-m-d", strtotime($endDate.' -'.$sMonth.' months'));
$conditions .= sprintf(" and arrival_date >= '%s' and arrival_date <= '%s'",$stDate,$endDate);
$urlQryString .='&month='.$sMonth;

if($sPassport) {
    $conditions .= " and passport_no like '%$sPassport%' ";
    $urlQryString .='&passport='.$sPassport;
}
if($sVisaType) {
    $conditions .= " and visa_type = '$sVisaType' ";
}
if($sCountry) {
    $conditions .= " and country = '$sCountry' ";
}

$db = Database::getInstance();
$mysqli = $db->getConnection();

$countryList = $db->executeRawQuery(sprintf("SELECT  DISTINCT country FROM `fp_information`"));
$countries = array();
if(!empty($countryList)){
    foreach ($countryList as $country){
        $countries[$country['country']] = $country['country'];
    }
}

$query = sprintf("SELECT `name`,i.passport_no AS passport_no,country,authority,penalty,penalty_to,status,action_date,action, COUNT(i.id) as TotalArrival FROM fp_information i INNER JOIN suspects s ON i.passport_no=s.passport_no %s GROUP BY passport_no ORDER BY TotalArrival DESC;", $conditions);
$fpInfo = $db->executeRawQuery($query);
//echo $query;die;
