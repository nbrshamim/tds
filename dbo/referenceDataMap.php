<?php
/**
 * Author: Jakir Hosen Khan.
 * E-mail: jkr.h.khan@gmail.com
 * National Board of Revenue(NBR)
 * Date: 4/24/2018
 * Time: 4:27 PM
 */

require_once("Database.php");

$db = Database::getInstance();
$mysqli = $db->getConnection();

$valueField = sprintf("name_".$ln);

$upazillaMap = $db->getRows("upazila");
$tanaMap = $db->dataMap("upazila", array('key' => 'id', 'value' => $valueField));
$districtMap = $db->dataMap("zilla", array('key' => 'id', 'value' => $valueField));
$instituteMap = $db->dataMap("pmis_institute", array('key' => 'id', 'value' => $valueField));
$subjectMap =  $db->dataMap("pmis_subject", array('key' => 'id', 'value' => $valueField));
$langMap = $db->dataMap("language", array('key' => 'id', 'value' => $valueField));
$serviceTypeMap = $db->dataMap("language", array('key' => 'id', 'value' => $valueField));
$pubtypeMap = $db->dataMap("pmis_publication_type", array('key' => 'id', 'value' => $valueField));
$positionMap = $db->dataMap("designations", array('key' => 'designation_id', 'value' => ($ln == 'en')?'designation_eng':'designation_bng'));
$countryMap = $db->dataMap("countries", array('key' => 'id', 'value' => $valueField));
$cadreMap = $db->dataMap("pmis_cadre", array('key' => 'id', 'value' => $valueField));
$rankMap = $db->dataMap("pmis_rank", array('key' => 'id', 'value' => $valueField));
$payScaleMap =  $db->dataMap("pmis_payscale", array('key' => 'id', 'value' => $valueField));
$postMap = $db->dataMap("pmis_designations", array('key' => 'id', 'value' => $valueField));
$bcsBatchMap = $db->dataMap("pmis_bcslist", array('key' => 'id', 'value' => $valueField));
$boardMap = $db->dataMap("pmis_board_versity", array('key' => 'id', 'value' => $valueField),array('type'=>1));
$sscDegMap =  $db->dataMap("pmis_degree", array('key' => 'id', 'value' => $valueField),array('level'=>SECONDARY));
$hscDegMap =  $db->dataMap("pmis_degree", array('key' => 'id', 'value' => $valueField),array('level'=>HIGHER_SECONDARY));
$hDegMap =  $db->dataMap("pmis_degree", array('key' => 'id', 'value' => $valueField),array('level'=>GRADUATION));
$mDegMap =  $db->dataMap("pmis_degree", array('key' => 'id', 'value' => $valueField),array('level'=>MASTERS));
$degMap =  $db->dataMap("pmis_degree", array('key' => 'id', 'value' => $valueField));
$officeMap =  $db->dataMap("pmis_office", array('key' => 'id', 'value' => $valueField));
$officeCodeMap =  $db->dataMap("pmis_office", array('key' => 'code', 'value' => $valueField));
$wingCodeMap =  $db->dataMap("pmis_wing", array('key' => 'code', 'value' => $valueField));
$branchMap =  $db->dataMap("pmis_doptor", array('key' => 'id', 'value' => $valueField));
$postMap2 = $db->dataMap("pmis_organograms", array('key' => 'id', 'value' => sprintf("item_name_".$ln)));

