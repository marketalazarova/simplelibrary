<?php

require("functions.php");

if (isset($_POST['publication']) && count($_POST['publication'])) {
    $db = getDb();
    $query = getInsertQuery("publications", $_POST['publication']);
    if (mysqli_query($db, $query)) {
        $location = $_SERVER["HTTP_REFERER"];
        $location.= (strpos($_SERVER["HTTP_REFERER"], "success=1") === false) ? "&success=1" : "";
        header("Location: $location");
        exit();
    }
}

echo "error occurred";