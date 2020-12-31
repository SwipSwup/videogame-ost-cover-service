<?php
require_once "src/seeder.php";

header('Content-Type: application/json');

if(isset($_GET['request'])) {
    $seeder = new seeder();
    $osts = $seeder->createOsts();

    switch ($_GET['request']) {
        case 'all':
            echo json_encode($osts);
            break;

        default:
            $ost = $osts[$_GET['request']-1];
            echo json_encode($ost);
            break;
    }
}