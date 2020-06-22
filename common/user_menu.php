<?php
/**
 * Author: Jakir Hosen Khan.
 * E-mail: jkr.h.khan@gmail.com
 * Date: 8/1/2018
 * Time: 11:18 AM
 */
?>

<div class="panel-group admin-panel" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-primary">
        <div class="panel-heading" role="tab">
            <h4 class="panel-title">
                <a href="admin.php">
                    Dashboard
                </a>
            </h4>
        </div>
    </div>

    <div class="panel panel-primary">
        <div class="panel-heading" role="tab" id="heading4">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                    Tax Data Information<span class="glyphicon glyphicon-plus pull-right" aria-hidden="true"></span>
                </a>
            </h4>
        </div>
        <div id="collapseFour" class="panel-collapse collapse<?php echo ($page =='iList')?" in":"";?>" role="tabpanel" aria-labelledby="heading4" aria-expanded="true">
            <div class="panel-body">
                <div class="list-group">
                    <a href="user.php?page=iList" class="list-group-item <?php echo ($page =='iList')?"active-m":"" ?>">
                        <i class="fa fa-list"></i></span> list
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
        <div id="collapseThree" class="panel-collapse collapse<?php echo in_array($page, array('monthlyTravel','personDetails'))?" in":"";?>" role="tabpanel" aria-labelledby="heading3" aria-expanded="true">
            <div class="panel-body">
                <div class="list-group">
                    <a href="user.php?page=monthlyTravel" class="list-group-item <?php echo in_array($page, array('monthlyArrivalDeparture','personDetails'))?"active-m":"" ?>">
                        <i class="fa fa-list"></i></span> Monthly
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