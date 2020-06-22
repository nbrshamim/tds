<?php
/**
 * Author: Jakir Hosen Khan.
 * E-mail: jkr.h.khan@gmail.com
 * Date: 10/22/2018
 * Time: 3:15 PM
 */
require_once ("dao/foreignPeopleDataRead.php");
?>
<div class="row">
    <div class="col-lg-12 container-header-top">
        <h4 class="bg-success container-header">
            <?php echo FP_INFORMATION_TITLE; ?>
            <?php if($_SESSION['privilege'] && $_SESSION['privilege']==SUPER_ADMIN_PRIVILEGE):?>
            <a  href="../admin/admin.php?page=import" class="pull-right">
                <i class="fa fa-upload fa-button"></i>
            </a>
            <?php endif; ?>
        </h4>
</div>
</div>
<div class="row">
    <form class="form-inline" role="form" method="get">
        <input type="hidden" name="page" value="iList">
        <div class="col-lg-12">
            <div class="form-group">
                <label for="filter">Name</label>
                <input class="form-control" type="text" name="name" id="sName" value="<?php echo (isset($sName))?$sName:""; ?>">
            </div>
            <div class="form-group">
                <label for="filter">Passport No</label>
                <input class="form-control" type="text" name="passport_no" id="passport" value="<?php echo (isset($sPassport))?$sPassport:""; ?>">
            </div>
            <div class="form-group">
                <label for="filter">Arrival From</label>
                <input class="form-control" type="text" name="arrival_date_from" id="arrivalDateFrom" value="<?php echo (isset($arrivalDateFrom))?$arrivalDateFrom:""; ?>">
            </div>
            <div class="form-group">
                <label for="filter">To</label>
                <input class="form-control" type="text" name="arrival_date_to" id="arrivalDateTo" value="<?php echo (isset($arrivalDateTo))?$arrivalDateTo:""; ?>">
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
            </div>
            <button type="submit" class="btn btn-primary"><span class="fa fa-search" aria-hidden="true"></span></button>
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
                <th>Passport No</th>
                <th>Visa Type</th>
                <th>Arrival Date</th>
                <th>Departure Date</th>
                <th>Origin</th>
                <th>L.V. Country</th>
                <th>Purpose of Travel</th>
                <th>Is Suspected</th>
                <th>Picture</th>
<!--                <th>Action</th>-->
            </tr>
            </thead>
            <tbody>
            <?php if(!empty($fpInfo)): ?>
                <?php foreach ($fpInfo as $key=>$value): ?>
                    <tr class="<?php echo (isset($value['status']))?"tr-danger":"" ?>">
                        <td><?php echo ($key+1); ?></td>
                        <td><?php echo (isset($value['name']))?$value['name']:"--" ?></td>
                        <td><?php echo (isset($value['father']))?$value['father']:"--" ?></td>
                        <td><?php echo (isset($value['mother']))?$value['mother']:"--" ?></td>
                        <td><?php echo (isset($value['passport_no']))?$value['passport_no']:"--" ?></td>
                        <td><?php echo (isset($value['visa_type']))?$value['visa_type']:"--" ?></td>
                        <td><?php echo (isset($value['arrival_date']))?date("Y-m-d",strtotime($value['arrival_date'])):"--" ?></td>
                        <td><?php echo (isset($value['departure_date']))?date("Y-m-d",strtotime($value['departure_date'])):"--" ?></td>
                        <td><?php echo (isset($value['country']))?$value['country']:"--" ?></td>
                        <td><?php echo (isset($value['country_last']))?$value['country_last']:"--" ?></td>
                        <td><?php echo (isset($value['purpose']))?$value['purpose']:"--" ?></td>
                        <td><?php echo (isset($value['status']))?"Yes":"No" ?></td>
                        <td>
                            <?php if(isset($value['picture'])){

                                $pPic = '..\media\uploads\\'.$value['picture'];                                

                             ?>
                            <img src="<?php echo (isset($value['picture']))?$pPic:"--"; ?>" height="100" width="82" class="img-thumbnail" id="viewProfilePic">
                            <?php } ?>
                        </td>
<!--                        <td></td>-->
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
</script>