<?php
/**
 * Author: Jakir Hosen Khan.
 * E-mail: jkr.h.khan@gmail.com
 * Date: 10/18/2018
 * Time: 1:01 PM
 */
require_once("dao/userDataWrite.php");
?>

<form name="SubAdmin" data-toggle="validator" role="form" id="userForm" method="post">
    <div class="controls">
        <div class="panel-group">
            <div class="panel panel-success">
                <?php if(!empty($userInfo)&&isset($userInfo['id'])&&$userInfo['id']): ?>
                    <input type="hidden" name="id" value="<?php echo $userInfo['id']; ?>">
                <?php endif; ?>
                <div class="panel panel-success">
                    <div class="panel-heading">User Basic Information</div>
                    <?php if(!empty($userInfo)&&isset($userInfo['id'])&&$userInfo['id']): ?>
                        <input type="hidden" name="id" value="<?php echo $userInfo['id']; ?>">
                    <?php endif; ?>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="office">Full Name<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter Full Name"
                                           value="<?php echo (!empty($userInfo) && isset($userInfo['name']))?$userInfo['name']:"" ?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="office">Mobile No.</label>
                                    <input type="text" class="form-control" name="phone" placeholder="Enter Mobile No."
                                           value="<?php echo (!empty($userInfo) && isset($userInfo['phone']))?$userInfo['phone']:"" ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="office">Address</label>
                                    <textarea class="form-control" rows="5" id="address" name="address" placeholder="Address"
                                    ><?php echo (!empty($userInfo) && isset($userInfo['address']))?$userInfo['address']:"" ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="office">Email</label>
                                    <input type="text" class="form-control" name="email" placeholder="Enter Email"
                                           value="<?php echo (!empty($userInfo) && isset($userInfo['email']))?$userInfo['email']:"" ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="office">Intercom</label>
                                    <input type="text" class="form-control" name="intercom" placeholder="Enter Intercom No."
                                           value="<?php echo (!empty($userInfo) && isset($userInfo['intercom']))?$userInfo['intercom']:"" ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="office">Office Name</label>
                                    <input type="text" class="form-control" name="office" placeholder="Enter Office"
                                           value="<?php echo (!empty($userInfo) && isset($userInfo['office']))?$userInfo['office']:"" ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if(!(!empty($userInfo)&&isset($userInfo['id'])&&$userInfo['id'])): ?>
                    <div class="panel-heading">User Authentication Information</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="userName">User Name</label>
                                    <input type="username" class="form-control" name="username" id="username"
                                           value="<?php echo (!empty($userInfo) && $userInfo['username'])?$userInfo['username']:''?>" placeholder="User Name" autocomplete="off">
                                </div>
                            </div>
                        </div>

                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" name="password" id="password"
                                               value="<?php echo (!empty($userInfo) && $userInfo['password'])?$userInfo['password']:''?>" placeholder="Password">
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
<script type="text/javascript">
//    $('#username').on("blur",function () {
//        var username = $(this).val();
//        $.post("../common/checkDuplicateUser.php",{username:username}, function (response) {
//            if(response){
//                alert("UserName already exist.");
//                $(this).val('');
//                return false;
//            }
//        });
//        return false;
//    })
</script>