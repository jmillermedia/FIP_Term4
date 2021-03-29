<?php
include("connect.php");
include("../admin/scripts/functions.php");

    $result = getEngageInfo($pdo);

    return $result;