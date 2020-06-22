<?php
/**
 * Author: Jakir Hosen Khan.
 * E-mail: jkr.h.khan@gmail.com
 * Date: 10/18/2018
 * Time: 1:01 PM
 */
require_once("dao/saveDoptorInfo.php");
?>

<form name="Post" data-toggle="validator" role="form" id="addPost" method="post">
    <div class="controls">
        <div class="panel-group">
            <div class="panel panel-success">
                <div class="panel-heading">User Basic Information</div>
                <?php if(!empty($branchInfo)&&isset($branchInfo['id'])&&$branchInfo['id']): ?>
                    <input type="hidden" name="id" value="<?php echo $branchInfo['id']; ?>">
                <?php endif; ?>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="office">User Office <span class="text-danger">*</span></label>
                                <select class="form-control" name="office_code" id="office" required>
                                    <option value="">Select Office</option>
                                    <?php if(!empty($officeMap)):?>
                                        <?php foreach ($officeMap as $id=>$name): ?>
                                            <option value="<?php echo $id ?>" <?php echo (!empty($branchInfo)&&isset($branchInfo['office_code'])&&$id==$branchInfo['office_code'])?"selected":""?>>
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
                                <label for="doptor">Parent Doptor <span class="text-danger">*</span></label>
                                <select class="form-control" name="doptor_code" id="doptor_code" required>
                                    <option value="">Select Parent Doptor</option>
                                    <?php if(!empty($doptorMap)):?>
                                        <?php foreach ($doptorMap as $id=>$name): ?>
                                            <option value="<?php echo $id ?>" <?php echo (!empty($branchInfo)&&isset($branchInfo['name_en'])&&$id==$branchInfo['name_en'])?"selected":""?>>
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
                                <label for="Branch">Branch Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="name_en" id="nameEn"
                                       value="<?php echo (!empty($branchInfo) && isset($branchInfo['name_en']))?$branchInfo['name_en']:"" ?>"
                                       placeholder="Branch Name" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="Branch">শাখা/অধিশাখার নাম <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="name_bn" id="nameBn"
                                       value="<?php echo (!empty($branchInfo) && isset($branchInfo['name_bn']))?$branchInfo['name_bn']:"" ?>"
                                       placeholder="শাখা/অধিশাখার নাম" required>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if(empty($authInfo)):?>
                    <div class="panel-heading">Authentication Information</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="userName">User Name</label>
                                    <input type="username" class="form-control" name="username" id="username"
                                           value="<?php echo (!empty($dataUsers) && $dataUsers['username'])?$dataUsers['username']:''?>" placeholder="User Name" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password" id="password"
                                           value="<?php echo (!empty($dataUsers) && $dataUsers['password'])?$dataUsers['password']:''?>" placeholder="Password">
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
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