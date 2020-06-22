<?php
/**
 * Author: Jakir Hosen Khan.
 * E-mail: jkr.h.khan@gmail.com
 * Date: 8/1/2018
 * Time: 11:18 AM
 */
?>

<div class="panel-group admin-panel vmenu" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-primary">
        <div class="panel-heading" role="tab" id="heading1">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Dashboard<span class="glyphicon glyphicon-plus pull-right" aria-hidden="true">
                </a>
            </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse<?php echo in_array($page, array('dashboard'))?" in":"";?>" role="tabpanel" aria-labelledby="heading1" aria-expanded="true">
            <div class="panel-body">
                <div class="list-group">
                    <a href="admin.php?page=dashboard" class="list-group-item <?php echo ($page =='dashboard')?"active-m":"" ?>">
                        <i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading" role="tab" id="heading2">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    Tax Data Information<span class="glyphicon glyphicon-plus pull-right" aria-hidden="true"></span>
                </a>
            </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse<?php echo in_array($page, array('iList','fList'))?" in":"";?>" role="tabpanel" aria-labelledby="heading2" aria-expanded="true">
            <div class="panel-body">
                <div class="list-group">
                    <a href="admin.php?page=fList&status=<?php echo DRAFT; ?>" class="list-group-item <?php echo ($page =='fList' && $fStatus==DRAFT)?"active-m":"" ?>">
                        <i class="fa fa-file-excel-o draft-color"></i></span> Temporary Files
<!--                        <i class="fas fa-file-spreadsheet"></i>-->
                    </a>
                    <a href="admin.php?page=fList&status=<?php echo IMPORTED; ?>" class="list-group-item <?php echo ($page =='fList' && $fStatus==IMPORTED)?"active-m":"" ?>">
                        <i class="fa fa-file-excel-o active-color"></i></span> Imported Files
                    </a>
                    <a href="admin.php?page=iList" class="list-group-item <?php echo ($page =='iList')?"active-m":"" ?>">
                        <i class="fa fa-list"></i></span> list
                    </a>
                    <a href="admin.php?page=taxList" class="list-group-item <?php echo ($page =='taxList')?"active-m":"" ?>">
                        <i class="fa fa-list"></i></span> Tax-list
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading" role="tab" id="heading3">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseTwo">
                    Report<span class="glyphicon glyphicon-plus pull-right" aria-hidden="true"></span>
                </a>
            </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse<?php echo in_array($page, array('suspectList','organization','personDetails','detectList','actionList'))?" in":"";?>" role="tabpanel" aria-labelledby="heading3" aria-expanded="true">
            <div class="panel-body">
                <div class="list-group">
                    <a href="http://localhost:8000/reports" class="list-group-item <?php echo in_array($page, array('organization'))?"active-m":"" ?>">
                        <i class="fa fa-info-circle"></i></span> Organization
                    </a>
                    <a href="admin.php?page=suspectList" class="list-group-item <?php echo in_array($page, array('suspectList'))?"active-m":"" ?>">
                        <i class="fa fa-bug suspect"></i></span> Suspect List
                    </a>
                    <a href="admin.php?page=detectList" class="list-group-item <?php echo in_array($page, array('detectList'))?"active-m":"" ?>">
                        <i class="fa fa-bolt detect"></i></span> Detected List
                    </a>
                    <a href="admin.php?page=actionList" class="list-group-item <?php echo in_array($page, array('actionList'))?"active-m":"" ?>">
                        <i class="fa fa-crosshairs acton_list"></i></span> Action List
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading" role="tab" id="heading5">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                    Users<span class="glyphicon glyphicon-plus pull-right" aria-hidden="true"></span>
                </a>
            </h4>
        </div>
        <div id="collapseFive" class="panel-collapse collapse<?php echo ($page =='uList' || $page =='uForm')?" in":"";?>" role="tabpanel" aria-labelledby="heading5" aria-expanded="true">
            <div class="panel-body">
                <div class="list-group">
                    <a href="admin.php?page=uList" class="list-group-item <?php echo ($page =='uList' || $page =='uForm')?"active-m":"" ?>">
                        <i class="fas fa-list"></i></span> list
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading" role="tab">
            <h4 class="panel-title">
                <a href="../logout.php">
                    Logout
                </a>
            </h4>
        </div>
    </div>
</div>