<?php
require_once('config/init.php');
unset($_SESSION['logged_in']);
unset($_SESSION['username']);
session_destroy();
header("Location: ../index.php");