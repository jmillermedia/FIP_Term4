<?php
include("connect.php");
include("functions.php");

    $result = getMembersImages($pdo);

    return $result;