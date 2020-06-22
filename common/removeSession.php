<?php
/**
 * Created by PhpStorm.
 * User: khan
 * Date: 4/24/2018
 * Time: 11:22 AM
 */
require_once("../config/config.php");
if(isset($_SESSION['flushMessage'])){
    unset($_SESSION['flushMessage']);
}
if(isset($_SESSION['flushStatus'])){
    unset($_SESSION['flushStatus']);
}
echo 1;die;