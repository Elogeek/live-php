<?php
define("ERROR",0);
define("SUCCESS",1);

/**
 * display message on top
 * @param $message
 * @param int $type
 */

function displayMessage($message, $type=SUCCESS) {
    $message = strip_tags(base64_decode($message));
    if($message) {
        $class = $type === ERROR ? 'error' : 'success';
        echo 'div class="'.$class.'">'.$message.'</div>';
    }
}

?>