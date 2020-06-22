<?php
/**
 * Author: Jakir Hosen Khan.
 * E-mail: jkr.h.khan@gmail.com
 * Date: 10/31/2018
 * Time: 2:11 PM
 */

require_once('../dbo/Database.php');

$db = Database::getInstance();
$mysqli = $db->getConnection();

$condition = sprintf(" WHERE status=%s ",$fStatus);
if(isset($_GET['name'])){
    $sName = $_GET['name'];
    $condition .= " and name like '%$sName%'";
}
$query = sprintf("select * from data_file %s ORDER BY name DESC",$condition);
$fpFlies = $db->executeRawQuery($query);