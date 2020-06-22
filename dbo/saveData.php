<?php
/**
 * Author: Jakir Hosen Khan.
 * E-mail: jkr.h.khan@gmail.com
 * Date: 8/5/2018
 * Time: 4:54 PM
 */

try{
    $mysqli->autocommit(FALSE);
    if(isset($dataObj['id'])){
        $status = $db->update($table,$dataObj['id'],$dataObj);
    }else{
        $status = $db->insert($table, $dataObj);
    }
    if($status && $status != 1){
        $msg = ($status)?"Error: ".$status:$form." Information not Saved!";
        throw new Exception($msg);
    }
    if($isHistory&&isset($historyData)){
        $status = $db->insert($historyTable, $historyData);
    }
    $mysqli->commit();
    $_SESSION['flushMessage'] = (isset($msgSuccess))?$msgSuccess:$form." Information has been successfully Saved!";
    $_SESSION['flushStatus'] = true;
    isset($redirectPage)?redirectPage($redirectPage):redirectPage('office.php');
}
catch (Exception $e){
    $mysqli->rollback();
    $_SESSION['flushMessage'] = $e->getMessage();
    $_SESSION['flushStatus'] = false;
}
