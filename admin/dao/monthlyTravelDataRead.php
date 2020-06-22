<?php
/**
 * Author: Jakir Hosen Khan.
 * E-mail: jkr.h.khan@gmail.com
 * Date: 10/28/2018
 * Time: 2:40 PM
 *
 * Read data From DB
 */
//require_once('common/queryString.php');
require_once('../dbo/Database.php');

$sMonth = (!empty($_GET)&&isset($_GET['month']))?$_GET['month']:3;
$sVisit = (!empty($_GET)&&isset($_GET['visit']))?$_GET['visit']:3;
$sPassport = (!empty($_GET)&&isset($_GET['passport']))?$_GET['passport']:'';
$sName = (!empty($_GET)&&isset($_GET['name']))?$_GET['name']:'';
$sVisaType = (!empty($_GET)&&isset($_GET['visa_type']))?$_GET['visa_type']:'';
$sCountry = (!empty($_GET)&&isset($_GET['country']))?$_GET['country']:'';
//die;
$urlQryString = '&visit='.$sVisit;
$conditions = sprintf(" where DATEDIFF( departure_date, arrival_date ) >= %s",$sVisit);
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

$query = sprintf("SELECT `name`,father,mother,dob,i.passport_no AS passport_no,purpose,country,country_last,address_bd,visa_type,occupation,status, COUNT(i.id) as TotalArrival FROM fp_information i LEFT JOIN suspects s ON i.passport_no=s.passport_no %s GROUP BY passport_no ORDER BY TotalArrival DESC;", $conditions);
$fpInfo = $db->executeRawQuery($query);
//echo $query;die;
