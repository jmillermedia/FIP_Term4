<?php
include("connect.php");
include("functions.php");

    $result = getClientsInfo($pdo);

    return $result;