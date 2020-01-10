
<?php
require "./list.horoscope.php";
session_start();
if (isset($_SERVER["REQUEST_METHOD"])) {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_SESSION["horoskop"])) {
            if (isset($_POST["date"])) {
                $horoscope = getHoroskop($_POST["date"]);
                $_SESSION["horoskop"] = $horoscope;
                echo json_encode(true);
            } else {
                echo json_encode("Date is not set in body");
            }
        } else {
            echo json_encode(false);
        }
    } else {
        echo json_encode("not a Post method");
    }
} else {
    echo json_encode("No valid request");
}
?>