<?php
/**
 * Created by PhpStorm.
 * User: khan
 * Date: 4/19/2018
 * Time: 12:48 PM
 */
$ln = 'en';
if (!empty($_SESSION) && isset($_SESSION['authId'])) {
    require_once('../dbo/Database.php');
    $db = Database::getInstance();
    $mysqli = $db->getConnection();
    $langInfo = $db->getRow('lang_active', array(), array('id' => 1), array());
    if (isset($langInfo['active_ln'])) {
        $ln = $langInfo['active_ln'];
    }
}