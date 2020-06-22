<?php
/**
 * Author: Jakir Hosen Khan.
 * E-mail: jkr.h.khan@gmail.com
 * Date: 4/15/2018
 * Time: 4:36 PM
 */

require_once('dbo/Database.php');

if($_POST){
    $db = Database::getInstance();
    $mysqli = $db->getConnection();
    $where = array();
    $dataUsers = array();

    $userData['username'] = $where['username'] = mysqli_real_escape_string($mysqli,trim($_POST['username']));
    $userData['password'] = $where['password'] = md5(mysqli_real_escape_string($mysqli,trim($_POST['password'])));

    $usrCaptcha['captcha']  = mysqli_real_escape_string($mysqli,trim($_POST['captcha']));
    
    if(($usrCaptcha['captcha'] != $_SESSION['vercode'])){ //Added by Shahana
        $_SESSION['flushMessage'] = "Wrong Captcha!";
        $_SESSION['flushStatus'] = false;
        $error['captcha'] = true;   
        $userData['password'] = "";
    }
    else
    {
        $userInfo = $db->getRow('users', array(),$where,array());
        if(!empty($userInfo)){
            if(isset($userInfo['privilege']) &&$userInfo['privilege']==SUB_ADMIN_PRIVILEGE){
                $_SESSION['isSubAdmin'] = true;
                $path = "/admin/user";
            }else{
                $_SESSION['isAdmin'] = true;
                $path = "/admin/admin";
            }
            $_SESSION['privilege'] = $userInfo['privilege'];
            $_SESSION['authId'] = $userInfo['id'];
			$_SESSION['binNumber'] = $userInfo['bin_number'];
            $_SESSION['username'] = $userInfo['username'];

            $_SESSION['flushMessage'] = "You have been successfully logged In!";
            $_SESSION['flushStatus'] = true;
//            echo '/'.APP_ROOT.$path.'.php';die;
            redirectPage('/'.APP_ROOT.$path.'.php');
        }else {
            $_SESSION['flushMessage'] = "User Name/Password not match";
            $_SESSION['flushStatus'] = false;
            $error['username'] = true;
            $error['password'] = true;
            }
    }
}