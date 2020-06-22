<?php
/**
 * Author: Jakir Hosen Khan.
 * E-mail: jkr.h.khan@gmail.com
 * Date: 10/29/2018
 * Time: 2:05 PM
 *
 * Read Details list of arrival of Foreign employee
 */

require_once ("dao/personalDetailsDataRead.php");
//echo ($fpInfo['0']['name']);die;
?>
<div class="row">
    <div class="col-lg-12 container-header-top">
        <h4 class="bg-success container-header">
            Monthly Travel Details of <strong><?php  echo (isset($fpInfo['0']['name']))?$fpInfo['0']['name']:"--" ?></strong>


            <a title="Download Report" href="../admin/report.php?page=personalDetailsReport<?php echo sprintf("&month=%s&visit=%s&passport=%s",$_GET['month'],$_GET['visit'],$_GET['passport']); ?>" class="pull-right" target="_blank">
                <i class="fa fa-download fa-button"></i>
            </a>
            <?php if(isset($fpInfo['0']['status'])&&$fpInfo['0']['status']): ?>
                <span style="font-size: 12px;float: right;color:red;margin-right: 5px;line-height: 23px;"><?php echo ($fpInfo['0']['status']==SUSPECTED)?"Suspected":"Detected"; ?></span>
            <?php else: ?>
            <button class="header-btn" title="Mark as Suspected" id="suspect">
                Suspect <i class="fa fa-exclamation-circle"></i>
            </button>
            <?php endif; ?>
            <input type="hidden" name="passport_no" id="passportNo" value="<?php echo (isset($fpInfo['0']['passport_no']))?$fpInfo['0']['passport_no']:""; ?>">
        </h4>
    </div>
</div>
<!--<div class="row">-->
<!--    <div class="col-lg-2">Name</div>-->
<!--    <div class="col-lg-8"> : --><?php // echo (isset($fpInfo['0']['name']))?$fpInfo['0']['name']:"--" ?>
<!--    </div>-->
<!--</div>-->

<div id="loading" style="display:none;width:69px;height:89px;border:1px solid black;position:absolute;top:50%;left:50%;padding:2px;"><img src='demo_wait.gif' width="64" height="64" /><br>Loading..</div>
<div class="row">
    <div class="col-lg-2">Father</div>
    <div class="col-lg-8"> : <?php  echo (isset($fpInfo['0']['father']))?$fpInfo['0']['father']:"--" ?>
    </div>
</div>
<div class="row">
    <div class="col-lg-2">Mother</div>
    <div class="col-lg-8"> : <?php  echo (isset($fpInfo['0']['mother']))?$fpInfo['0']['mother']:"--" ?>
    </div>
</div>
<div class="row">
    <div class="col-lg-2">Country</div>
    <div class="col-lg-8"> : <?php  echo (isset($fpInfo['0']['country']))?$fpInfo['0']['country']:"--" ?>
    </div>
</div>
<div class="row">
    <div class="col-lg-2">Passport No.</div>
    <div class="col-lg-8"> : <?php  echo (isset($fpInfo['0']['passport_no']))?$fpInfo['0']['passport_no']:"--" ?>
    </div>
</div>
<div class="row">
    <div class="col-lg-2">Total Travel</div>
    <div class="col-lg-8"> : <?php  echo count($fpInfo); ?></div>
</div>
<div class="row">
    <div class="col-lg-12"><h4>Travel History:</h4></div>
</div>
<div class="row">
    <div class="col-lg-12">
        <table class="table table-bordered table-responsive">
            <thead class="">
            <tr>
                <th>#</th>
                <th>Arrival Time</th>
                <th>Departure Time</th>
                <th>Visa Type</th>
                <th>Purpose of Travel</th>
                <th>Last Visited Country</th>
            </tr>
            </thead>
            <tbody>
            <?php if(!empty($fpInfo)): ?>
                <?php foreach ($fpInfo as $key=>$value): ?>
                    <tr>
                        <td><?php echo ($key+1); ?></td>
                        <td><?php echo (isset($value['arrival_date']))?$value['arrival_date']:"--" ?></td>
                        <td><?php echo (isset($value['departure_date']))?$value['departure_date']:"--" ?></td>
                        <td><?php echo (isset($value['visa_type']))?$value['visa_type']:"--" ?></td>
                        <td><?php echo (isset($value['purpose']))?$value['purpose']:"--" ?></td>
                        <td><?php echo (isset($value['country_last']))?$value['country_last']:"--" ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6">No Data found.</td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<script type="text/javascript">
    $('#suspect').click(function () {
        var passport_no = $("#passportNo").val();
        $.post("foreignEmpInfo/suspect.php",{passport_no:passport_no}, function (response) {
            if(response){
                window.location = "admin.php?page=monthlyTravel";
            }
            else{
                alert("Error occur");
                return false;
            }
        });



//        $.ajax({
//            method: "POST",
//            url: 'foreignEmpInfo/suspect.php',
//            data:{passport_no:passport_no},
//            beforeSend: function() {
//                $(".loading").show();
//            },
//            success: function(data) {
//                alert(data);
//                $(".loading").hide();
//            }
//        });
    });


</script>