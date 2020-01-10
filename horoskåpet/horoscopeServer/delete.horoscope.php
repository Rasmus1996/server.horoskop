<?php
session_start();
if (isset($_SERVER['REQUEST_METHOD'])) {
    if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
        if (isset($_SESSION["horoskop"])) {
            unset($_SESSION['horoskop']);
            echo json_encode(true);
            exit;
        } else {
            echo json_encode(false);
            exit;
        }
    } else {
        echo json_encode("not a Delete method");
        exit;
    }
} else {
    echo json_encode("No valid request");
    exit;
}
