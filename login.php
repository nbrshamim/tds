<?php
/**
 * Author: Jakir Hosen Khan.
 * E-mail: jkr.h.khan@gmail.com
 * Date: 3/29/2018
 * Time: 3:18 PM
 */

/*
 * Load files
 */
session_start();
require_once("config/config.php");
require_once("common/userVerification.php");
$ln = 'en';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once("common/head.php") ?>
    <!-- Shahana: below two line for Captcha -->
    <link href="media/css/style_captcha.css" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
</head>
<body>
<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="logo"><a href="<?php echo '/'.APP_ROOT; ?>/index.php" rel="home">
                        <img class="img-responsive" src="<?php echo '/'.APP_ROOT; ?>/media/logo/nbr_logo1.jpg" alt="<?php echo APP_NAME ?>"/>
                    </a>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8">
<!--                <div class="btn-group" id="lnStatus" data-toggle="buttons" style="float: right;margin: 5px 0px 5px 0px;">-->
<!--                    <label class="lnBtn btn btn-default btn-on btn-xs --><?php //echo ($ln=='en')?$ln." active":""; ?><!--">-->
<!--                        <input type="radio" class="" value="en" name="ln">EN</label>-->
<!--                    <label class="lnBtn btn btn-default btn-off btn-xs  --><?php //echo ($ln=='bn')?$ln." active":""; ?><!--">-->
<!--                        <input type="radio"  class=""  value="bn" name="ln">BN</label>-->
<!--                </div>-->
                <nav id="topnav" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                            <li><a href="<?php echo '/'.APP_ROOT; ?>/login.php">Login</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<main id="main">
    <div class="container">
        <form name="Person" data-toggle="validator" role="form" id="registration" action="login.php" method="post">
            <div class="controls">
                <div class="row">
                    <div class="col-lg-12">&nbsp;</div>
                    <div class="col-lg-12">&nbsp;</div>
                    <div class="col-lg-12">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <?php if(isset($_SESSION['flushMessage'])):?>
                            <div class="alert <?php echo (isset($_SESSION['flushStatus']) && $_SESSION['flushStatus'])?"alert-success":"alert-danger" ?>" role="alert" id="alertMsg">
                                <?php echo $_SESSION['flushMessage']; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">&nbsp;</div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="panel-group">
                            <div class="panel panel-success">
                                <div class="panel-heading"><?php echo ($ln == 'en')?ADMIN_LOGIN_TITLE_EN:ADMIN_LOGIN_TITLE_EN; ?></div>
                                <div class="panel-body">

                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="form-group <?php echo ($error['username'])?"has-error has-danger":"";?>">
                                                <label for="User Name" class="control-label">User Name<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="username" id="username"
                                                       value="<?php echo (isset($userData['username']))?$userData['username']:""; ?>" placeholder="User Name" required>
                                            </div>
                                            </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group <?php echo ($error['password'])?"has-error has-danger":"";?>">
                                            <label for="Password" class="control-label">Password<span class="text-danger">*</span></label>
                                            <input type="password" class="form-control" name="password" id="password"
                                                   value="<?php echo (isset($userData['password']))?$userData['password']:""; ?>" placeholder="Password" required>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <label for="captcha" class="control-label">Captcha<span class="text-danger">*</span></label>                                            
                                                <input type="text" placeholder="Enter Code" id="captcha" name="captcha" class="form-control" required="required" autocomplete="off">
                                                <img src="generate_captcha.php" class="imgcaptcha" alt="captcha"  />
                                                <img src="media/images/refresh.png" alt="reload" class="refresh" />
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <button type="submit" id="saveInfo" class="btn btn-default">Log In</button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">&nbsp;</div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
<!--                                            <a href="employee/index.php">Sign Up!</a>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">&nbsp;</div>
                </div>
            </div>
        </form>
    </div>
</main>
<footer id="footer">
    <?php require_once("common/footer.php"); ?>
    <script type="text/javascript">
        $(document).ready (function(){
            window.setTimeout(function() {
                $(".alert").fadeTo(500, 0).slideUp(500, function(){
                    $(this).remove();
                    $.post('common/removeSession.php',{},function (status) {
                        (status)?console.log('Flush Removed'):console.log('Unknown error');
                    })
                });
            }, 4000);
    
         
    $(".refresh").click(function () {
        $(".imgcaptcha").attr("src","generate_captcha.php?_="+((new Date()).getTime()));            
    });

    $("#captcha").blur(function () {
            var captcha = $(this).val();
            $.post("common/verifyCaptcha.php", {captcha: captcha}, function(result){
            //alert(result+" inside post");
            if(result==1){
                //$(".imgcaptcha").attr("src","generate_captcha.php?_="+((new Date()).getTime()));                
                //alert("Data Submitted Successfully.")
             }else{                                   
                $("#captcha").val('Wrong Captcha Code!');   
                //$("#captcha").focus();
                return false;
             }
        });
        return false;
    });
    });
    </script>
</footer>
</body>
</html>
