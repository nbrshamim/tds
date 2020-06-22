<?php
/**
 * Author: Jakir Hosen Khan.
 * E-mail: jkr.h.khan@gmail.com
 * Date: 10/1/2018
 * Time: 4:17 PM
 */


require_once('../dbo/Database.php');

$db = Database::getInstance();
$mysqli = $db->getConnection();
$emp_id = 0;

if(!empty($_GET)&&isset($_GET['emp_id'])&&intval($_GET['emp_id'])){
    $aclInfo = $db->getRow('pmis_acl', array(),array('emp_id'=>intval($_GET['emp_id'])),array());
    $accessList = (!empty($aclInfo) && !empty($aclInfo['access']))?explode(',', $aclInfo['access']):array();
    $emp_id = trim($_GET['emp_id']);
}else{
    redirectPage("employee.php?page=list");
}

if (!empty($_POST)) {
    $table = "pmis_acl";
    $form = "ACL Information";
    $dataObj = array();
    if(isset($_POST['id'])){$dataObj['id'] = mysqli_real_escape_string($mysqli,trim ($_POST['id']));
    pr($dataObj[id]);
    }
    if(isset($emp_id)&&$emp_id>0){$dataObj['emp_id'] = $emp_id;}
    $dataObj['access'] = implode(",", $_POST['access']);

    //pr($_POST['access']);
    //pr($dataObj);die;
    $redirectPage = "employee.php?page=list";
    require_once("../dbo/saveData.php");

    $aclInfo = $dataObj;
    $accessList = $_POST['access'];
}