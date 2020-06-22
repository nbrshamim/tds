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

$designationList = $db->executeRawQuery(sprintf("SELECT  DISTINCT designation FROM `tax_employer_info`"));
$designations = array();
if(!empty($designationList)){
    foreach ($designationList as $desig){
        $designations[$desig['designation']] = $desig['designation'];
    }
}

//$query = sprintf("SELECT *,s.`status` AS s_status FROM fp_information i LEFT JOIN suspects s ON i.passport_no=s.passport_no %s ORDER BY i.id DESC", $conditions);
//$fpInfo = $db->executeRawQuery($query);

$query = sprintf("select * from tax_employer_info");
$taxEmplrInfo = $db->executeRawQuery($query);

//pr($query);
//pr($taxEmplrInfo);