<?php
/**
 * Author: Jakir Hosen Khan.
 * E-mail: jkr.h.khan@gmail.com
 * Date: 10/21/2018
 * Time: 12:20 PM
 */

require_once('../dbo/Database.php');

$db = Database::getInstance();
$mysqli = $db->getConnection();

$officeInfo = array();
if(!empty($_GET) && isset($_GET['id']) && intval($_GET['id'])>0){
    $userInfo = $db->getRow('users', array(),array('id'=>intval($_GET['id'])),array());
}
if (!empty($_POST)) {
    //pr($_POST);die;
    $table = "users";
    $form = "Sub Admin ";
    $dataObj = array();
    $dataUsers = array();

    try{
        if(isset($_POST['id'])){$dataUsers['id'] = mysqli_real_escape_string($mysqli,trim ($_POST['id']));}
        if(isset($_POST['name'])){$dataUsers['name'] = mysqli_real_escape_string($mysqli,trim ($_POST['name']));}
        if(isset($_POST['phone'])){$dataUsers['phone'] = mysqli_real_escape_string($mysqli,trim ($_POST['phone']));}
        if(isset($_POST['address'])){$dataUsers['address'] = mysqli_real_escape_string($mysqli,trim ($_POST['address']));}
        if(isset($_POST['email'])){$dataUsers['email'] = mysqli_real_escape_string($mysqli,trim ($_POST['email']));}
        if(isset($_POST['intercom'])){$dataUsers['intercom'] = mysqli_real_escape_string($mysqli,trim ($_POST['intercom']));}
        if(isset($_POST['office'])){$dataUsers['office'] = mysqli_real_escape_string($mysqli,trim ($_POST['office']));}

        if(!isset($dataUsers['id'])){
            if(!isset($_POST['username'])){
                throw new Exception("Please enter username");
            }else{
                $authInfo = $db->getRow('users', array(),array('username'=>$_POST['username']),array());
                if(!empty($authInfo)){
                    if(!isset($dataUsers['id']) && ($dataUsers['id']!=$authInfo['id'])){
                        throw new Exception("Username already exist");
                    }
                }
                $dataUsers['username'] = mysqli_real_escape_string($mysqli,trim ($_POST['username']));
            }
            if(!isset($_POST['password'])){
                throw new Exception("Please enter password");
            }
            else{
                $dataUsers['password'] = md5(mysqli_real_escape_string($mysqli,trim($_POST['password'])));
            }
        }
        $mysqli->autocommit(FALSE);
        if(!empty($dataUsers)){
            $dataUsers['privilege'] = SUB_ADMIN_PRIVILEGE;
            if(!isset($dataUsers['id'])){
                $userInsertStatus = $db->insert('users', $dataUsers, true);
            }
            else{
                $userInsertStatus = $db->update('users', $dataUsers['id'], $dataUsers, true);
            }
            if($userInsertStatus && $userInsertStatus != 1){
                $msg = "Error: User creation Failed!";
                throw new Exception($msg);
            }
        }

        $_SESSION['flushMessage'] = "User successfully ".($dataUsers['id'])?"Created!":"Updated";
        $_SESSION['flushStatus'] = true;
        $mysqli->commit();
        redirectPage('user.php?page=uList');

    } catch (Exception $e){
        pr($e);die;
        $mysqli->rollback();
        $userInfo = $_POST;
        $_SESSION['flushMessage'] = $e->getMessage();
        $_SESSION['flushStatus'] = false;
    }

}

