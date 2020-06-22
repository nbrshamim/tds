<?php
/**
 * Author: Jakir Hosen Khan.
 * E-mail: jkr.h.khan@gmail.com
 * Date: 10/28/2018
 * Time: 2:40 PM
 *
 * Monthly/'s Arrivel & Depature report
 */
require_once ("dao/monthlyTravelDataRead.php");
?>
<div class="row">
    <div class="col-lg-12 container-header-top">
        <h4 class="bg-success container-header">
            <?php echo "Monthly Arrivel"; ?>
            <a  href="../admin/report.php?page=monthlyTravelReport<?php echo sprintf("&month=%s&visit=%s&name=%s&passport=%s&visa_type=%s&country=%s",$sMonth,$sVisit,$sName,$sPassport,$sVisaType,$sCountry); ?>" class="pull-right" target="_blank">
                <i class="fa fa-download fa-button"></i>
            </a>
        </h4>
    </div>
</div>
<div class="row">
    <form class="form-inline" role="form" method="get">
        <input type="hidden" name="page" value="monthlyTravel">
        <div class="col-lg-12">
            <div class="form-group">
                <label for="filter">Total Month (Last)</label>
                <input class="form-control" type="number" pattern="\d*" min="0" max="20" name="month" id="sMonth" value="<?php echo (isset($sMonth))?$sMonth:""; ?>">
            </div>

            <div class="form-group">
                <label for="filter">Duration</label>
                <select class="form-control search_fld" name="visit" id="visit" placeholder="Select Duration">
                    <option value="">Duration</option>
                    <?php for ($count = 3; $count <=15; $count++): ?>
                        <option value="<?php echo $count ?>" <?php echo ($sVisit==$count)?"Selected":""?>>
                            <?php echo " > ".$count; ?>
                        </option>
                    <?php endfor; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="filter">Name</label>
                <input class="form-control" type="text" name="name" id="sName" value="<?php echo (isset($sName))?$sName:""; ?>">
            </div>
            <div class="form-group">
                <label for="filter">Passport No</label>
                <input class="form-control" type="text" name="passport" id="passport" value="<?php echo (isset($sPassport))?$sPassport:""; ?>">
            </div>
        </div>
        <div class="col-lg-12">&nbsp;</div>
        <div class="col-lg-12">
            <div class="form-group">
                <label for="filter">Visa Type</label>
                <select class="form-control search_fld" name="visa_type" id="visaType" placeholder="Visa Type">
                    <option value="">Visa Type</option>
                    <?php foreach ($visaType as $key=>$value): ?>
                        <option value="<?php echo $key ?>" <?php echo ($sVisaType==$key)?"Selected":"" ?> >
                            <?php echo $value; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="filter">Country</label>
                <select class="form-control search_fld" name="country" id="country" placeholder="Country">
                    <option value="">Country</option>
                    <?php if(!empty($countries)):?>
                        <?php foreach ($countries as $key=>$country): ?>
                            <option value="<?php echo $key ?>" <?php echo ($sCountry==$key)?"Selected":"" ?> >
                                <?php echo $country; ?>
                            </option>
                        <?php endforeach;endif; ?>
                </select>
            </div><button type="submit" class="btn btn-primary"><span class="fa fa-search" aria-hidden="true"></span></button>
        </div>
    </form>
</div>
<div class="row">&nbsp;</div>
<div class="row">
    <div class="col-lg-12">
        <table class="table table-bordered table-responsive">
            <thead class="">
            <tr class="tr-th-bg">
                <th>#</th>
                <th>Name</th>
                <th>Father</th>
                <th>Mother</th>
                <th>Total Arrivel</th>
                <th>Passport No</th>
                <th>Origin</th>
                <th>Last Visited Country</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php if(!empty($fpInfo)): ?>
                <?php foreach ($fpInfo as $key=>$value): ?>
                    <tr class="<?php echo (isset($value['status'])&&($value['status']==SUSPECTED))?"tr-danger":"" ?>">
                        <td><?php echo ($key+1); ?></td>
                        <td class="nameLst">
                            <a href="admin.php?page=personDetails<?php
                            echo sprintf("&month=%s&visit=%s&passport=%s",$sMonth,$sVisit,$value['passport_no']); ?>">
                                 <?php echo (isset($value['name']))?$value['name']:"" ?>
                            </a>

                        </td>
                        <td><?php echo (isset($value['father']))?$value['father']:"--" ?></td>
                        <td><?php echo (isset($value['mother']))?$value['mother']:"--" ?></td>
                        <td><?php echo (isset($value['TotalArrival']))?$value['TotalArrival']:"--" ?></td>
                        <td><?php echo (isset($value['passport_no']))?$value['passport_no']:"--" ?></td>
                        <td><?php echo (isset($value['country']))?$value['country']:"--" ?></td>
                        <td><?php echo (isset($value['country_last']))?$value['country_last']:"--" ?></td>
                        <td>
                            <?php if(isset($value['status'])&&$value['status']){
                                echo ($value['status']==SUSPECTED)?"Suspected":"Detected";
                            }else{echo "--";}
                            ?>
                        </td>
                        <td>
                            <?php if(isset($value['status'])){ ?>
                            <span><?php echo "--"; ?></span>
                            <?php }else{ ?>
                            <button class="suspect" id="<?php echo $key ?>">Suspect</button>
                            <input type="hidden" class="info_id<?php echo $key ?>" value="<?php echo (isset($value['passport_no']))?$value['passport_no']:"0" ?>">
                            <?php } ?>
                        </td>

                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="8" class="text-center text-danger">No Data found.</td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<script type="text/javascript">
    $(function () {
        var arrivalDateFromPicker = function() {
            $("#arrivalDateFrom").datetimepicker({
                format:'YYYY-MM-DD',
                icons: {time: "fa fa-clock-o",date: "fa fa-calendar",up: "fa fa-arrow-up",down: "fa fa-arrow-down"}
            }).find('input:first').on("blur",function () {
                var date = parseDate($(this).val());
                if (! isValidDate(date)) {date = moment().format('YYYY-MM-DD');}
                $(this).val(date);
            });
        }
        var arrivalDateToPicker = function() {
            $("#arrivalDateTo").datetimepicker({
                format:'YYYY-MM-DD',
                icons: {time: "fa fa-clock-o",date: "fa fa-calendar",up: "fa fa-arrow-up",down: "fa fa-arrow-down"}
            }).find('input:first').on("blur",function () {
                var date = parseDate($(this).val());
                if (! isValidDate(date)) {date = moment().format('YYYY-MM-DD');}
                $(this).val(date);
            });
        }

        var isValidDate = function(value, format) {
            format = format || false;
            // lets parse the date to the best of our knowledge
            if (format) {
                value = parseDate(value);
            }

            var timestamp = Date.parse(value);

            return isNaN(timestamp) == false;
        }

        var parseDate = function(value) {
            var m = value.match(/^(\d{1,2})(\/|-)?(\d{1,2})(\/|-)?(\d{4})$/);
            if (m)
                value = m[5] + '-' + ("00" + m[3]).slice(-2) + '-' + ("00" + m[1]).slice(-2);

            return value;
        }

        arrivalDateFromPicker();
        arrivalDateToPicker();
    });

    $(".suspect").click(function () {
        var passport_no = $(".info_id"+$(this).attr('id')).val();
        $.post("foreignEmpInfo/suspect.php",{passport_no:passport_no}, function (response) {
            if(response){
                window.location = "admin.php?page=monthlyTravel";
            }
            else{
                alert("Error occur");
                return false;
            }
        });
        return false;
    });

</script>