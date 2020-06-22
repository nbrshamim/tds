<?php
/**
 * Author: Jakir Hosen Khan.
 * E-mail: jkr.h.khan@gmail.com
 * Date: 10/9/2018
 * Time: 2:56 PM
 */

$sOffice = "";
$sWing = "";
$sDesig = "";
$sGrade = "";
$sDist = "";
$sTana = "";
$sName = "";
$sPassport = "";
$arrivalDateFrom = "";
$arrivalDateTo = "";
$sVisit = "";
$sVisaType = "";
$sCountry = "";
$where = array();
$like = array();
$conditions = "where 1=1 ";
if(!empty($_GET)){
    if(isset($_GET['office']) &&$_GET['office']) {
        $sOffice = $_GET['office'];
        $where['office_code'] = $sOffice;
    }
    if(isset($_GET['wing']) &&$_GET['wing']) {
        $sWing = $_GET['wing'];
        $where['wing'] = $sWing;
    }
    if(isset($_GET['desig']) &&$_GET['desig']) {
        $sDesig = $_GET['desig'];
        $where['designation'] = $sDesig;
    }
    if(isset($_GET['grade']) &&$_GET['grade']) {
        $sGrade = $_GET['grade'];
        $where['post_grade'] = $sGrade;
    }
    if(isset($_GET['dist']) &&$_GET['dist']) {
        $sDist = $_GET['dist'];
        $where['district'] = $sDist;
    }
    if(isset($_GET['tana']) &&$_GET['tana']) {
        $sTana = $_GET['tana'];
        $where['upazila'] = $sTana;
    }

    if(isset($_GET['arrival_date_from']) &&$_GET['arrival_date_from']) {
        $arrivalDateFrom = $_GET['arrival_date_from'];
        $conditions .= sprintf(" and arrival_date >= '%s' ",$arrivalDateFrom);
    }
    if(isset($_GET['arrival_date_to']) &&$_GET['arrival_date_to']) {
        $arrivalDateTo = $_GET['arrival_date_to'];
        $conditions .= sprintf(" and arrival_date <= '%s' ",$arrivalDateTo);
    }
    if(isset($_GET['name']) &&$_GET['name']) {
        $sName = $_GET['name'];
        $like['name'] = $sName;
        $conditions .= " and name like '%$sName%' ";
    }
    if(isset($_GET['passport_no']) &&$_GET['passport_no']) {
        $sPassport = $_GET['passport_no'];
        $conditions .= " and passport_no like '%$sPassport%' ";
    }
    if(isset($_GET['visa_type']) &&$_GET['visa_type']) {
        $sVisaType = $_GET['visa_type'];
        $conditions .= " and visa_type = '$sVisaType' ";
    }
    if(isset($_GET['country']) &&$_GET['country']) {
        $sCountry = $_GET['country'];
        $conditions .= " and country = '$sCountry' ";
    }

}

