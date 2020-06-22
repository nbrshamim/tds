<?php
/**
 * Author: Jakir Hosen Khan.
 * E-mail: jkr.h.khan@gmail.com
 * Date: 8/1/2018
 * Time: 11:18 AM
 */

if(!isset($_SESSION)){
    session_start();
}

require_once("function.php");
require_once("configLang.php");
require_once("configACL.php");

define('PAGE_ITEM_COUNT',10);
define('APP_ROOT','tds');

define("MARK_TITLE_EN", "RESULT ACCESS REPORT");
define("MARK_TITLE_BN", "মার্ক এন্ট্রি ফর্ম");

define("APP_NAME_EN", "National Board of Revenue");
define("APP_NAME_BN", "জাতীয় রাজস্ব বোর্ড");

define("BLANK_INFO_EN", "Information not Available");
define("BLANK_INFO_BN", "সংশ্লিষ্ট তথ্য পাওয়া যায় নি");

define("ADMIN_LOGIN_TITLE_EN", "Admin Login");
define("ADMIN_LOGIN_TITLE_BN", "আডমিন লগইন");
define("EMPLOYEE_LOGIN_TITLE_EN", "Officer's Login");
define("EMPLOYEE_LOGIN_TITLE_BN", "অফিসার লগইন");

define("USER_LIST_TITLE_EN", "User List");
define("USER_ADD_TITLE_EN", "Add User");


// taxms
define("FP_INFORMATION_TITLE", "Tax Data Information");
define("FP_DATA_FILES_TITLE", "Tax Employeer Data Files");


?>