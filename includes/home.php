<?php
include("connect.php");
include("functions.php");

    $result = getHomeImages($pdo);

    return $result;