<?php
/**
 * Author: Jakir Hosen Khan.
 * E-mail: jkr.h.khan@gmail.com
 * Date: 11/7/2018
 * Time: 10:41 AM
 */
require_once("dao/employerListWrite.php");
//pr($fEmpInfo);
?>

<form name="Post" data-toggle="validator" role="form" id="suspectAction" method="post">
    <div class="controls">
        <div class="panel-group">
            <div class="panel panel-success">
                <div class="panel-heading">Action of Suspected Employee</div>
                <?php if(!empty($fEmpInfo)&&isset($fEmpInfo['passport_no'])&&$fEmpInfo['passport_no']): ?>
                    <input type="hidden" name="passport_no" value="<?php echo $fEmpInfo['passport_no']; ?>">
                <?php endif; ?>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="office">Employer Name<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="employer" id="employer"
                                       value="<?php echo (!empty($fEmpInfo) && isset($fEmpInfo['employer']))?$fEmpInfo['employer']:"" ?>"
                                       placeholder="Employer Name" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="office">Company Name<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="company_name" id="companyName"
                                       value="<?php echo (!empty($fEmpInfo) && isset($fEmpInfo['company_name']))?$fEmpInfo['company_name']:"" ?>"
                                       placeholder="Company Name" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="office">Employer BIN<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="bin" id="bin"
                                       value="<?php echo (!empty($fEmpInfo) && isset($fEmpInfo['bin']))?$fEmpInfo['bin']:"" ?>"
                                       placeholder="Employer BIN" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="office">Employer Mobile<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="employer_mobile" id="employerMobile"
                                       value="<?php echo (!empty($fEmpInfo) && isset($fEmpInfo['employer_mobile']))?$fEmpInfo['employer_mobile']:"" ?>"
                                       placeholder="Employer Mobile" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="office">Employer Phone<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="employer_phone" id="employerPhone"
                                       value="<?php echo (!empty($fEmpInfo) && isset($fEmpInfo['employer_phone']))?$fEmpInfo['employer_phone']:"" ?>"
                                       placeholder="Employer Phone" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="District">District <span class="text-danger">*</span></label>
                            <select class="form-control" name="district" id="district" required>
                                <option value="">Select District</option>
                                <?php if(!empty($districtMap)):?>
                                    <?php foreach ($districtMap as $id=>$name): ?>
                                        <option value="<?php echo $id ?>" <?php echo (!empty($fEmpInfo)&&isset($fEmpInfo['district'])&&$id==$fEmpInfo['district'])?"selected":""?>>
                                            <?php echo $name; ?>
                                        </option>
                                    <?php endforeach; endif; ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="doptor">Parent Tana<span class="text-danger">*</span></label>
                                <select class="form-control" name="tana" id="tana" required>
                                    <option value="">Select Tana</option>
                                    <?php if(!empty($tanaMap)):?>
                                        <?php foreach ($tanaMap as $id=>$name): ?>
                                            <option value="<?php echo $id ?>" <?php echo (!empty($fEmpInfo)&&isset($fEmpInfo['tana'])&&$id==$fEmpInfo['tana'])?"selected":""?>>
                                                <?php echo $name; ?>
                                            </option>
                                        <?php endforeach; endif; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="office">Employer Address<span class="text-danger">*</span></label>
                                <textarea type="text" class="form-control" name="address" id="address"  placeholder="Address" required><?php
                                    echo (!empty($fEmpInfo) && isset($fEmpInfo['address']))?$fEmpInfo['address']:"" ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="office">Employee Mobile<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="mobile" id="mobile"
                                       value="<?php echo (!empty($fEmpInfo) && isset($fEmpInfo['mobile']))?$fEmpInfo['mobile']:"" ?>"
                                       placeholder="Employer BIN" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="office">Employee Address<span class="text-danger">*</span></label>
                                <textarea type="text" class="form-control" name="current_address" id="current_address"  placeholder="Employee Address" required><?php
                                    echo (!empty($fEmpInfo) && isset($fEmpInfo['current_address']))?$fEmpInfo['current_address']:"" ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <button type="submit" id="saveInfo" class="btn btn-default">Submit</button>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">&nbsp;</div>
        </div>
    </div>
</form>
<script type="text/javascript">
    $("#district").change(function () {
        // EXTRACT JSON DATA.
        var dist = $(this).val();
        $.getJSON("../common/getTana.php?district="+dist, function (data) {
            $tana = $('#tana');
            $tana.empty(); // remove old options
            $tana.append($("<option></option>")
                .attr("value", '').text('<?php echo ($ln=='en')?"Police Station/Upazalla":"থানা/উপজেলা"; ?>'));
            $.each(data, function (index, value) {
                $tana.append('<option value="' + index + '">' + value + '</option>');
            });
        });
    });
</script>