<?php
/**
 * Author: Jakir Hosen Khan.
 * E-mail: jkr.h.khan@gmail.com
 * Date: 8/1/2018
 * Time: 10:54 AM
 */
//print_r($_POST);die;
if(!empty($_POST) && isset($_POST['dir'])){
    ini_set('max_execution_time', 5000);
    $file = $_POST['dir'];
    $phpDir = $_SERVER['PHPRC']."/php.exe";
    $WshShell = new COM("WScript.Shell");
    $oExec = $WshShell->Run("$phpDir -f $file", 0, false);
    $oExec = $WshShell->Run("D:\webAppServer\xampp\php\php.exe -f D:/webAppServer/xampp/htdocs/hrm/foreignEmpInfo/insertCandidateList.php", 0, false);
    echo 1;die;
}else {echo 0;die;}
