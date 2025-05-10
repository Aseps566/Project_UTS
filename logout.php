<?php
session_start();

$_SESSION = [];
session_unset();
session_destroy();
session_write_close();

setcookie(session_name(), '', time() - 3600, '/');

$_SESSION['logout_success'] = "Anda berhasil logout!";
header("Location: landpage.php");
exit;
exit;
?>