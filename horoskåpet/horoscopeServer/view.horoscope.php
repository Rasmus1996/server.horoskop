<?php
session_start();
if (isset($_SERVER["REQUEST_METHOD"])) {
    if ($_SERVER["REQUEST_METHOD"] === "GET") {

        if (isset($_SESSION["horoskop"])) {
            echo json_encode($_SESSION["horoskop"]);
            exit;
        } else {
            echo json_encode(false);
            exit;
        }
    } else {
        echo json_encode("not a Get method");
        exit;
    }
} else {
    echo json_encode("No valid request");
    exit;
}
