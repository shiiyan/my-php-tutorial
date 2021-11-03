<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== false) {
?>
    <h3>strpos() must have returned non-false</h3>
    <p>You are using Google Chrome</p>
<?php
} else {
?>
    <h3>strpos() must have returned false</h3>
    <p>You are not using Google Chrome</p>
<?php
}
?>