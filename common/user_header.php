<?php require_once ("loadLangInfo.php"); ?>
<style type="text/css">
    @font-face {
        font-family: 'Nikosh';
        src: url('<?php echo '/'.APP_ROOT; ?>/media/fonts/Nikosh/Nikosh.eot?#iefix') format('embedded-opentype'),
        url('<?php echo '/'.APP_ROOT; ?>/media/fonts/Nikosh/Nikosh.woff') format('woff'),
        url('<?php echo '/'.APP_ROOT; ?>/media/fonts/Nikosh/Nikosh.ttf')  format('truetype'),
        url('<?php echo '/'.APP_ROOT; ?>/media/fonts/Nikosh/Nikosh.svg#Nikosh') format('svg');
        font-weight: normal;
        font-style: normal;
    }
    <?php if($ln=='bn'): ?>
    body {
        font-family: 'Nikosh', "Helvetica Neue",Helvetica,Arial,sans-serif  !important;
        font-size: 18px;
    }
    <?php endif; ?>
</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="logo"><a href="<?php echo '/'.APP_ROOT; ?>/admin/index.php" rel="home">
                    <img class="img-responsive" src="<?php echo '/'.APP_ROOT; ?>/media/logo/nbr_logo1.jpg" alt="<?php echo APP_NAME ?>"/>
                </a>
            </div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="" style="float: right">
                <?php if(!empty($_SESSION) && isset($_SESSION['privilege']) && $_SESSION['privilege']==SUB_ADMIN_PRIVILEGE):?>
                    Log in as <span style="font-size: 18px">
                        <?php echo (!empty($_SESSION) && isset($_SESSION['username']))?strtoupper($_SESSION['username']):""; ?>
                    </span>
                <?php endif; ?>
            </div>
            <div class="" style="float: right;width: 100%">
                <nav id="topnav" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <?php if(!empty($_SESSION) && isset($_SESSION['privilege']) && $_SESSION['privilege']==SUB_ADMIN_PRIVILEGE):?>
                            <li class="active"><a href="<?php echo '/'.APP_ROOT; ?>/admin/index.php"><?php echo ($ln=='en')?"Home":"হোম"; ?></a></li>
                            <!--                        <li class="active"><a href="--><?php //echo '/'.APP_ROOT; ?><!--/admin/recruitment.php">--><?php //echo ($ln=='en')?"Recruitment":"নিয়োগ"; ?><!--</a></li>-->
                            <li><a href="<?php echo '/'.APP_ROOT; ?>/logout.php"><?php echo ($ln=='en')?"Logout":"লগ আউট"; ?></a></li>
                        <?php else: ?>
                            <li class="active"><a href="<?php echo '/'.APP_ROOT; ?>/admin/index.php"><?php echo ($ln=='en')?"Home":"হোম"; ?></a></li>
                            <li><a href="<?php echo '/'.APP_ROOT; ?>/login.php"><?php echo ($ln=='en')?"Login":"লগইন"; ?></a></li>
                        <?php endif; ?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(".lnBtn").click(function (e) {
        e.preventDefault();
        var ln = $(this).children('input').val();
        $.post( "/<?php echo APP_ROOT ?>/common/langUpdate.php", { ln: ln })
            .done(function( data ) {
                window.location.replace(window.location.href);
            });
    });

</script>