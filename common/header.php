<?php require_once("loadLangInfo.php"); ?>
<style type="text/css">
    @font-face {
        font-family: 'Nikosh';
        src: url('<?php echo '/'.APP_ROOT; ?>/media/fonts/Nikosh/Nikosh.eot?#iefix') format('embedded-opentype'),
        url('<?php echo '/'.APP_ROOT; ?>/media/fonts/Nikosh/Nikosh.woff') format('woff'),
        url('<?php echo '/'.APP_ROOT; ?>/media/fonts/Nikosh/Nikosh.ttf') format('truetype'),
        url('<?php echo '/'.APP_ROOT; ?>/media/fonts/Nikosh/Nikosh.svg#Nikosh') format('svg');
        font-weight: normal;
        font-style: normal;
    }

    <?php if($ln=='bn'): ?>
    body {
        font-family: 'Nikosh', "Helvetica Neue", Helvetica, Arial, sans-serif !important;
        font-size: 15px;
    }

    <?php endif; ?>
</style>

<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="logo"><a href="<?php echo '/' . APP_ROOT; ?>/index.php" rel="home">
                    <img class="img-responsive" src="<?php echo '/' . APP_ROOT; ?>/media/logo/nbr_logo1.jpg"
                         alt="<?php echo ($ln=='en')?APP_NAME_EN:APP_NAME_BN; ?>"/>
                </a>
            </div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="btn-group" id="lnStatus" data-toggle="buttons" style="float: right;margin: 5px 0px 5px 0px;">
                <label class="lnBtn btn btn-default btn-on btn-xs <?php echo ($ln == 'en') ? $ln . " active" : ""; ?>">
                    <input type="radio" class="" value="en" name="ln">EN</label>
                <label class="lnBtn btn btn-default btn-off btn-xs  <?php echo ($ln == 'bn') ? $ln . " active" : ""; ?>">
                    <input type="radio" class="" value="bn" name="ln">BN</label>
            </div>
            <nav id="topnav" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <?php if (isset($_SESSION['authId'])): ?>
                        <li class="active">
                            <a href="<?php echo '/' . APP_ROOT; ?>/employee/home.php"><?php echo ($ln == 'en') ? "Home" : "হোম"; ?></a>
                        </li>
                        <li class="active">
                            <a href="<?php echo '/' . APP_ROOT; ?>/employee/view.php"><?php echo ($ln == 'en') ? "Employee Profile" : "কর্মকর্তা প্রোফাইল"; ?></a>
                        </li>
                        <li class="active">
                            <a href="<?php echo '/' . APP_ROOT; ?>/recruitment/view.php"><?php echo ($ln == 'en') ? "Recruitment" : "চাকুরীর  নিয়োগ"; ?></a>
                        </li>
                        <?php if(!empty($_SESSION) && isset($_SESSION['empInfo']) && isset($_SESSION['empInfo']['recruit_op_access'])&&$_SESSION['empInfo']['recruit_op_access']):?>
                            <li class="active">
                                <a href="<?php echo '/' . APP_ROOT; ?>/recruitment/view.php"><?php echo ($ln == 'en') ? "Recruitment" : "চাকুরীর  নিয়োগ"; ?></a>
                            </li>
                        <?php endif; ?>
                        <li>
                            <a href="<?php echo '/' . APP_ROOT; ?>/logout.php"><?php echo ($ln == 'en') ? "Logout" : "লগ আউট"; ?></a>
                        </li>
                    <?php else: ?>
                        <li class="active">
                            <a href="<?php echo '/' . APP_ROOT; ?>/employee/index.php"><?php echo ($ln == 'en') ? "Home" : "হোম"; ?></a>
                        </li>
                        <li>
                            <a href="<?php echo '/' . APP_ROOT; ?>/employee/index.php"><?php echo ($ln == 'en') ? "Register" : "নিবন্ধন"; ?></a>
                        </li>
                        <li>
                            <a href="<?php echo '/' . APP_ROOT; ?>/login.php"><?php echo ($ln == 'en') ? "Login" : "লগইন"; ?></a>
                        </li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(".lnBtn").click(function (e) {
        e.preventDefault();
        var ln = $(this).children('input').val();
        $.post("/<?php echo APP_ROOT ?>/common/langUpdate.php", {ln: ln})
            .done(function (data) {
                window.location.replace(window.location.href);
            });
    });

</script>