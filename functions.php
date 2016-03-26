<?php

require("config.php");

function getDb() {
    return mysqli_connect($cfg["dbHost"], $cfg["dbUser"], $cfg["dbPass"], $cfg["dbBase"]);
}