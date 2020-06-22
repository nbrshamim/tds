<?php
/**
 * Author: Jakir Hosen Khan.
 * E-mail: jkr.h.khan@gmail.com
 * Date: 8/1/2018
 * Time: 11:18 AM
 */
function pr($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

function redirectPage($url)
{
    if (headers_sent()) {
        ?>
        <script type="text/javascript">
            var newloc = <?php echo json_encode($url); ?>;
            if (window.location.replace)
                window.location.replace(newloc);
            else
                window.location.href = newloc;
        </script>
        <noscript>
            <meta http-equiv="Refresh" content="0;URL=<?php echo $url; ?>"/>
        </noscript>
        <?php
    } else {
        header("Location: " . $url);
    }
    exit();
}

?>