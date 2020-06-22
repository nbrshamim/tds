<div class="row">
    <?php if(isset($_SESSION['flushMessage'])):?>
        <div class="alert <?php echo (isset($_SESSION['flushStatus']) && $_SESSION['flushStatus'])?"alert-success":"alert-danger" ?>" role="alert" id="alertMsg">
            <?php echo $_SESSION['flushMessage']; ?>
        </div>
    <?php endif; ?>
</div>

<script type="text/javascript">

    $(document).ready (function(){
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove();
                $.post('../common/removeSession.php',{},function (status) {
                    (status)?console.log('Flush Removed'):console.log('Unknown error');
                })
            });
        }, 4000);
    });
</script>