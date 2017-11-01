<?php
session_start();
session_destroy();
header("Location: http://localhost/webshop/Game%20webshop/Login.php");
exit;