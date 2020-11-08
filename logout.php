<?php
@session_start();
session_destroy();
header("location: /shop/login.php");
?>