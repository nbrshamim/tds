<?php
/**
 * Author: Jakir Hosen Khan.
 * E-mail: jkr.h.khan@gmail.com
 * Date: 10/30/2018
 * Time: 9:28 AM
 */

session_start();
require_once("../config/config.php");
require_once("../config/digitDateConversion.php");
$digit = new DigitDateConversion();
require_once("common/authChecing.php");
$page = (!empty($_GET) && isset($_GET['page']))?$_GET['page']:"monthlyTravelReport";

require_once("report/".$page.".php");
