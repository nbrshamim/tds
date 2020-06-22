<?php
/**
 * Author: Jakir Hosen Khan.
 * E-mail: jkr.h.khan@gmail.com
 * Date: 11/11/2018
 * Time: 10:22 AM
 */require_once("dao/action.php");
//pr($suspectInfo);die;
?>

<form name="Post" data-toggle="validator" role="form" id="suspectAction" method="post">
    <div class="controls">
        <div class="panel-group">
            <div class="panel panel-success">
                <div class="panel-heading">Action about Suspected Employee</div>
                <?php if(!empty($suspectInfo)&&isset($suspectInfo['id'])&&$suspectInfo['id']): ?>
                    <input type="hidden" name="id" value="<?php echo $suspectInfo['id']; ?>">
                <?php endif; ?>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="office">Authority<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="authority" id="authority"  placeholder="Authority" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="doptor">Penalty To<span class="text-danger">*</span></label>
                                <select class="form-control" name="penalty_to" id="penaltyTo" required>
                                    <option value="">--Select--</option>
                                    <?php if(!empty($penaltyTo)):?>
                                        <?php foreach ($penaltyTo as $key=>$name): ?>
                                            <option value="<?php echo $key ?>" <?php echo (!empty($suspectInfo)&&isset($suspectInfo['penalty_to'])&&$key==$suspectInfo['penalty_to'])?"selected":""?>>
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
                                <label for="office">Penalty<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="penalty" id="penalty"  placeholder="Penalty" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="office">Action<span class="text-danger">*</span></label>
                                <textarea type="text" class="form-control" name="action" id="action"  placeholder="Action" required><?php
                                    echo (!empty($suspectInfo) && isset($suspectInfo['action']))?$suspectInfo['action']:"" ?></textarea>
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