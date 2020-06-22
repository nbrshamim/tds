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
            <?php echo "Organization"; ?>
            <a  href="../admin/report.php?page=monthlyTravelReport<?php echo sprintf("&month=%s&visit=%s&name=%s&passport=%s&visa_type=%s&country=%s",$sMonth,$sVisit,$sName,$sPassport,$sVisaType,$sCountry); ?>" class="pull-right" target="_blank">
                <i class="fa fa-download fa-button"></i>
            </a>
        </h4>
    </div>
</div>

<div class="row">&nbsp;</div>
<div class="row">
    <div class="col-lg-12">
        <table class="table table-bordered table-responsive">
            <thead class="">
            <tr class="tr-th-bg">
                <th>#</th>
                <th>Organization Name</th>
                <th>BIN Number</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            
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