<?php
include("connect.php");
$result = array();

function redirect_to($location){
    if($location!=null){
        header('Location: ' .$location);
        exit;
    }
}

function getIndexImages($conn) {

    $query = "SELECT * FROM tbl_index";

    $runQuery = $conn->query($query);

    while($row = $runQuery->fetchAll(PDO::FETCH_ASSOC)){
        $result[] = $row;
    }

    echo (json_encode($result));

}

function getAboutImages($conn) {

    $query = "SELECT * FROM tbl_about";

    $runQuery = $conn->query($query);

    while($row = $runQuery->fetchAll(PDO::FETCH_ASSOC)){
        $result[] = $row;
    }

    echo (json_encode($result));

}

function getContactImages($conn) {
      
    $query = "SELECT * FROM tbl_contact";
    
    $runQuery = $conn->query($query);
    
    while($row = $runQuery->fetchAll(PDO::FETCH_ASSOC)){
        $result[] = $row;
    }
    
    echo (json_encode($result));
    
}

function getHomeImages($conn) {

    $query = "SELECT * FROM tbl_home";

    $runQuery = $conn->query($query);

    while($row = $runQuery->fetchAll(PDO::FETCH_ASSOC)){
        $result[] = $row;
    }

    echo (json_encode($result));

}

function getMembersImages($conn) {

    $query = "SELECT * FROM tbl_members";

    $runQuery = $conn->query($query);

    while($row = $runQuery->fetchAll(PDO::FETCH_ASSOC)){
        $result[] = $row;
    }

    echo (json_encode($result));

}

function getTrainImages($conn) {

    $query = "SELECT * FROM tbl_train";

    $runQuery = $conn->query($query);

    while($row = $runQuery->fetchAll(PDO::FETCH_ASSOC)){
        $result[] = $row;
    }

    echo (json_encode($result));

}