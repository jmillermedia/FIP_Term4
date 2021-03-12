<?php
include("connect.php");
include("functions.php");

    $result = getTrainImages($pdo);

    return $result;