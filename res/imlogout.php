<?php
@require_once("continent7.php");

$pa = new imPrivateArea();
$pa->logout();
header("Location: " . $imSettings['general']['homepage_url']);

// End of file imlogout.php
