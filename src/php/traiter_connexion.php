<?php

$email = $_POST["inputEmailConnexion"];

if ($email == "rh@gmail.com") {
    $url = "indexrh.php";
} else {
    $url = "indexs.php";
}

header("Location: " . $url);

?>