<?php
session_start();
session_destroy();
header("Location: http://localhost/webshop/Login.php");
exit;