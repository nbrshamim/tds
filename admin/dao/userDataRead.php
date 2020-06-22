<?php
/**
 * Author: Jakir Hosen Khan.
 * E-mail: jkr.h.khan@gmail.com
 * Date: 10/18/2018
 * Time: 1:02 PM
 */

require_once('common/queryString.php');
require_once('../dbo/Database.php');

$db = Database::getInstance();
$mysqli = $db->getConnection();
$users =  $db->getRows("users",array(), array('privilege' => SUB_ADMIN_PRIVILEGE));