<?php
session_start();
session_destroy();

header("Location: app/login.php");
?>