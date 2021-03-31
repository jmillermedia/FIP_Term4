<?php
include("connect.php");
include("../admin/scripts/functions.php");

    $result = getClientsInfo($pdo);

    return $result;