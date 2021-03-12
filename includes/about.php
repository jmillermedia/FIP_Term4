<?php
include("connect.php");
include("functions.php");

    $result = getAboutImages($pdo);

    return $result;