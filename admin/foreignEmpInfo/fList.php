<?php
/**
 * Author: Jakir Hosen Khan.
 * E-mail: jkr.h.khan@gmail.com
 * Date: 10/31/2018
 * Time: 1:53 PM
 */

require_once ("dao/fileListRead.php");
?>
<div class="row">
    <div class="col-lg-12 container-header-top">
        <h4 class="bg-success container-header">
            <?php echo FP_DATA_FILES_TITLE; ?>
            <?php if($fStatus == DRAFT):?>
            <a  href="../admin/admin.php?page=dataFileUpload" class="pull-right">
                <i class="fa fa-plus fa-button"></i>
            </a>
           <?php endif; ?>
        </h4>
    </div>
</div>
<div class="row">
    <form class="form-inline" role="form" method="get">
        <input type="hidden" name="page" value="fList">
        <?php if($fStatus == IMPORTED):?>
            <input type="hidden" name="status" value="<?php echo IMPORTED; ?>">
        <?php endif; ?>
        <div class="col-lg-12">
            <div class="form-group">
                <label for="filter">Name</label>
                <input class="form-control" type="text" name="name" id="sName" value="<?php echo (isset($sName))?$sName:""; ?>">
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
                <th>Upload Date</th>
                <?php if($fStatus == IMPORTED):?>
                <th>Import Date</th>
                <?php endif; ?>
                <th>Status</th>
                <?php if($fStatus == DRAFT):?>
                    <th>Action</th>
                <?php endif; ?>
            </tr>
            </thead>
            <tbody>
            <?php if(!empty($fpFlies)):?>
                <?php foreach ($fpFlies as $key=>$value): ?>
                    <tr>
                        <td><?php echo ($key+1); ?></td>
                        <td><?php echo (isset($value['name']))?$value['name']:"--" ?></td>
                        <td><?php echo (isset($value['upload_date']))?date("Y-m-d",strtotime($value['upload_date'])):"--" ?></td>
                        <?php if($fStatus == IMPORTED):?>
                            <td><?php echo (isset($value['import_date']))?date("Y-m-d",strtotime($value['import_date'])):"--" ?></td>
                        <?php endif; ?>
                        <td><?php echo (isset($value['status']))?$fDataFilesStatus[$value['status']]:"--" ?></td>
                        <?php if($fStatus == DRAFT):?>
                            <td>
                                <button type="button" disabled class="btn btn-primary import" id="<?php echo $value['id']; ?>"><i class="fa fa-download"></i></button>
                            
                                <button type="button" class="btn btn-primary taximport" id="<?php echo $value['id']; ?>">
                                    <i class="fa fa-gg"></i></button>
                            </td>
                        <?php endif; ?>
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
    $(".import").click(function (e) {
        var id = $(this).attr('id');
        $.post("foreignEmpInfo/importFEInformation.php",{id:id}, function (response) {
            var obj = jQuery.parseJSON(response);
            if(obj.status){
                alert(obj.message);
                window.location = "admin.php?page=iList";
            }
            return false;
        });
    });
    $(".taximport").click(function (e) {
        var id = $(this).attr('id');
        $.post("taxEmployer/importTaxEmpinformation.php",{id:id}, function (response) {
            var obj = jQuery.parseJSON(response);
            if(obj.status){
                alert(obj.message);
                window.location = "admin.php?page=iList";
            }
            return false;
        });
    });
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
