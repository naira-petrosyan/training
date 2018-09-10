<?php
require('config.php');
// Destroying All Sessions
session_destroy();
session_unset();
// Redirecting To Home Page
header("Location: login.php");

die;
