<?php
/**
 * Created by PhpStorm.
 * User: khan
 * Date: 4/16/2018
 * Time: 11:17 AM
 */
session_start();
require_once("config/config.php");

$ln = $_SESSION['ln'];
session_unset();



$_SESSION['ln'] = $ln;
$_SESSION['flushMessage'] = "You have been successfully logged out!";
$_SESSION['flushStatus'] = true;

redirectPage('/'.APP_ROOT.'/login.php');