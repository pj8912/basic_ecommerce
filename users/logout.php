<?php
require '../config/config.php';
session_start();
session_unset();
session_destroy();
header('location:'.URL);
exit();

?>
