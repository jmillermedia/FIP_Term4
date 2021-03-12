<?php
include("connect.php");
include("functions.php");

    $result = getContactImages($pdo);

    return $result;