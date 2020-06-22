<?php
/**
 * Author: Jakir Hosen Khan.
 * E-mail: jkr.h.khan@gmail.com
 * Date: 11/7/2018
 * Time: 1:45 PM
 */

require_once ("dao/employerListRead.php");
?>

<div class="row">
    <div class="col-lg-12 container-header-top">
        <h4 class="bg-success container-header">
            Employer List of <strong><?php  echo (isset($employeeInfo['name']))?$employeeInfo['name']:"--" ?></strong>
            <?php if(!empty($employerInfo)): ?>
                <button title="Mark as Detected" class="header-btn" id="detect">
                    Detect <i class="fa fa-exclamation-circle"></i>
                </button>
            <?php endif; ?>

            <a title="Download Report" href="../admin/admin.php?page=employerAdd&passport_no=<?php echo $_GET['passport_no']; ?>" class="pull-right" target="_blank">
                <i class="fa fa-plus fa-button"></i>
            </a>
        </h4>
        <input type="hidden" name="passport_no" id="passportNo" value="<?php echo (isset($_GET['passport_no']))?$_GET['passport_no']:""; ?>">
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <table class="table table-bordered table-responsive">
            <thead class="">
            <tr class="tr-th-bg">
                <th>#</th>
                <th>Employer</th>
                <th>BIN</th>
                <th>Employer Company</th>
                <th>Employer Mobile</th>
                <th>Employer Phone</th>
                <th>Employee Address</th>
                <th>Employee Mobile</th>
            </tr>
            </thead>
            <tbody>
            <?php if(!empty($employerInfo)): ?>
                <?php foreach ($employerInfo as $key=>$value): ?>
                    <tr>
                        <td><?php echo ($key+1); ?></td>
                        <td><?php echo (isset($value['employer']))?$value['employer']:"--" ?></td>
                        <td><?php echo (isset($value['bin']))?$value['bin']:"--" ?></td>
                        <td><?php echo (isset($value['company_name']))?$value['company_name']:"--" ?></td>
                        <td><?php echo (isset($value['employer_mobile']))?$value['employer_mobile']:"--" ?></td>
                        <td><?php echo (isset($value['employer_phone']))?$value['employer_phone']:"--" ?></td>
                        <td><?php echo (isset($value['current_address']))?$value['current_address']:"--" ?></td>
                        <td><?php echo (isset($value['mobile']))?$value['mobile']:"--" ?></td>
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
    $('#detect').click(function () {
        var passport_no = $("#passportNo").val();
        $.post("dao/detect.php",{passport_no:passport_no}, function (response) {
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