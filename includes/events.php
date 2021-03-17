<?php
include("connect.php");
include("functions.php");

    $result = getEventsInfo($pdo);

    return $result;