<?php
include("connect.php");
include("../admin/scripts/functions.php");

    $result = getEventsInfo($pdo);

    return $result;