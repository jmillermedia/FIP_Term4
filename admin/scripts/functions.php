<?php
include("connect.php");
$result = array();

function redirect_to($location){
    if($location!=null){
        header('Location: ' .$location);
        exit;
    }
}


function getClientsInfo($conn){
    $query = "SELECT * FROM tbl_clients";

    $runQuery = $conn->query($query);

    while($row = $runQuery->fetchAll(PDO::FETCH_ASSOC)){
        $result[] = $row;
    }

    echo (json_encode($result));
}

function getEngageInfo($conn){
    $query = "SELECT * FROM tbl_engage";

    $runQuery = $conn->query($query);

    while($row = $runQuery->fetchAll(PDO::FETCH_ASSOC)){
        $result[] = $row;
    }

    echo (json_encode($result));
}

function getEventsInfo($conn){
    $query = "SELECT * FROM tbl_events";

    $runQuery = $conn->query($query);

    while($row = $runQuery->fetchAll(PDO::FETCH_ASSOC)){
        $result[] = $row;
    }

    echo (json_encode($result));
}

function getExecsInfo($conn){
    $query = "SELECT * FROM tbl_execs";

    $runQuery = $conn->query($query);

    while($row = $runQuery->fetchAll(PDO::FETCH_ASSOC)){
        $result[] = $row;
    }

    echo (json_encode($result));
}