<?php
require_once "src/Seeder.php";

header('Content-Type: application/json');

echo 'hier: ' . $_GET['request'];

if(isset($_GET['request'])) {
    $seeder = new Seeder();
    $osts = $seeder->createOsts();

    if($_GET['request'] === 'all') {
        echo json_encode($osts);
    }
    else {
        $id = intval($_GET['request']);
        if($id!=0 && sizeof($osts)>=$id) {
            $ost = $osts[$id-1];
            echo json_encode($ost);
        }
    }
}