<?php
include("connect.php");
include("functions.php");

    $result = getEngageInfo($pdo);

    return $result;