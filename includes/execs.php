<?php
include("connect.php");
include("../admin/scripts/functions.php");

    $result = getExecsInfo($pdo);

    return $result;