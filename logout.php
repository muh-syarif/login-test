<?php
if (!isset($_SESSION['nama'])) {
    header('location:/test-login/?no_bug');
}
session_start();
session_destroy();
header('location:/test-login');
?>