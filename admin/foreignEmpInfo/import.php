<?php
/**
 * Author: Jakir Hosen Khan.
 * E-mail: jkr.h.khan@gmail.com
 * Date: 7/25/2018
 * Time: 12:20 PM
 */
require_once("dao/uploadAndSaveData.php");
//require_once("dao/uploadAndSaveImage.php");
?>
<form name="Person" data-toggle="validator" role="form" id="upload"  method="post" enctype="multipart/form-data">
    <div class="controls">
        <div class="panel-group">
            <div class="panel panel-success">
                <div class="panel-heading">Import Foreign People Data</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="Purpose"></label>
                                <input type='file' class="form-control" name="csv_file" id='picture'
                                       placeholder="picture"/>
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
    $("#importCode").on("click", function (event) {
        $.post('forignPeopleInfo/importCode.php',{dir:"<?php echo $code_list; ?>"},function (data) {
            alert(data);
        })
    })
</script>
