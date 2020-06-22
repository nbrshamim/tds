<?php
/**
 * Author: Jakir Hosen Khan.
 * E-mail: jkr.h.khan@gmail.com
 * Date: 10/22/2018
 * Time: 3:52 PM
 */

require_once('common/queryString.php');
require_once('../dbo/Database.php');

$db = Database::getInstance();
$mysqli = $db->getConnection();

$countryList = $db->executeRawQuery(sprintf("SELECT  DISTINCT country FROM `fp_information`"));
$countries = array();
if(!empty($countryList)){
    foreach ($countryList as $country){
        $countries[$country['country']] = $country['country'];
    }
}

$query = sprintf("SELECT *,s.`status` AS s_status FROM fp_information i LEFT JOIN suspects s ON i.passport_no=s.passport_no %s ORDER BY i.id DESC", $conditions);
$fpInfo = $db->executeRawQuery($query);