<?php
ob_start();
session_start();

$num = mt_rand(1,1000);

$_SESSION["rand"] = $num;

ob_end_flush();