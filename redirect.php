<?php
if(isset($_GET['request'])) {
    $request = $_GET['request'];

    if($request === 'all') {
        header("Location: ./osts");
    }
    else {
        header("Location: ./ost/$request");
    }
}