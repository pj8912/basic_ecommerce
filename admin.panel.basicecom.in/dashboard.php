<?php
session_start();
?>


<?php
if (isset($_SESSION['a_id'])) {
    echo $_SESSION['a_id'];
} else {
    header('Location: index.php');
    exit();
}
