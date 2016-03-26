<?php

require("functions.php");

if (isset($_POST['publication']) && count($_POST['publication'])) {
    $db = getDb();
    $query = getInsertQuery("publications", $_POST['publication']);
    if (mysqli_query($db, $query)) {
        header("Location: ".$_SERVER["HTTP_REFERER"]."&success=1");
        exit();
    }
}

echo "error occurred";