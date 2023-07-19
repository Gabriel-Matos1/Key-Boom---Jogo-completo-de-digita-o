<?php
session_start();
unset($_SESSION["nick"]);
session_destroy();
print "<script>location.href ='main.php';</script>";
exit;
?>