<?php
require_once __DIR__. "/session.php";
$_SESSION = array();
session_destroy();
header('location: /index.php');