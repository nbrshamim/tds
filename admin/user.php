<?php
/**
 * Author: Jakir Hosen Khan.
 * E-mail: jkr.h.khan@gmail.com
 * Date: 10/18/2018
 * Time: 12:59 PM
 */

session_start();
require_once("../config/config.php");
require_once("../config/digitDateConversion.php");
$digit = new DigitDateConversion();

if(!empty($_SESSION) && isset($_SESSION['privilege']) && $_SESSION['privilege']!=SUB_ADMIN_PRIVILEGE){
    unset($_SESSION);
    redirectPage('../logout.php');
}
$page = isset($_GET['page'])?$_GET['page']:"iList";
$path = '';
if(in_array($page,array('iList','fList'))){
    $path = 'forignPeopleInfo/';
    $fStatus = (isset($_GET['status']))?trim($_GET['status']):DRAFT;
}else if(in_array($page,array('monthlyTravel','personDetails','monthlyTravelReport'))){
    $path = 'report/';
}
//echo $path.$page;die;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once("../common/head.php") ?>
    <link rel="stylesheet" href="../media/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<header id="header">
    <?php require_once("../common/user_header.php"); ?>
</header>
<main id="main" class="main">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">&nbsp;</div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <?php require_once "../common/user_menu.php"?>
            </div>
            <div class="col-lg-10 data-container">
                <?php require_once("../common/flushMessage.php"); ?>
                <?php require_once($path.$page.".php"); ?>
            </div>
        </div>

    </div>
</main>
<footer id="footer">
    <?php require_once("../common/footer.php"); ?>
</footer>

<script type="text/javascript">
    $('#viewTab  a').click(function(e) {
        e.preventDefault();
        $(this).tab('show');
    });
    $("ul.nav-pills#viewTab > li > a").on("shown.bs.tab", function(e) {
        var id = $(e.target).attr("href");
        localStorage.setItem('selectedTab', id)
    });
    var selectedTab = localStorage.getItem('selectedTab');
    $('#viewTab a[href="' + selectedTab + '"]').tab('show');
</script>
</body>
</html>
