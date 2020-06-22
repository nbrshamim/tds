<?php
/**
 * Author: Jakir Hosen Khan.
 * E-mail: jkr.h.khan@gmail.com
 * Date: 10/18/2018
 * Time: 12:37 PM
 */
$authStatus = (empty($_SESSION)) ? false : true;
if (!empty($_SESSION)) {
    if (isset($_SESSION['privilege']) && $_SESSION['privilege'] != SUPER_ADMIN_PRIVILEGE) {
        $authStatus = false;
    } else if (!isset($_SESSION['isAdmin'])) {
        $authStatus = false;
    }
}
if (!$authStatus) {
    unset($_SESSION);
    redirectPage("../login.php");
}
