<?php
/**
 * Created by PhpStorm.
 * User: khan
 * Date: 4/19/2018
 * Time: 11:15 AM
 */
$status = false;
if($_POST['ln']){
    require_once('../dbo/Database.php');
    $db = Database::getInstance();
    $mysqli = $db->getConnection();
    $data['id'] = 1;
    $data['active_ln'] = mysqli_real_escape_string($mysqli,trim ($_POST['ln']));

    $updateStatus = $db->update('lang_active', 1, $data);
    if($updateStatus){
        $status = true;
    }
}
echo $status;die;