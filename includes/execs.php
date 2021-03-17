<?php
include("connect.php");
include("functions.php");

    $result = getExecsInfo($pdo);

    return $result;