<?php

require("config.php");

/**
 * Connects to database by provided credentials
 *
 * @return resource MySQL link
 */
function getDb() {
    return mysqli_connect($cfg["dbHost"], $cfg["dbUser"], $cfg["dbPass"], $cfg["dbBase"]);
}

/**
 * Translates string in language provided by GET parameter
 *
 * @param  string $word word to translate
 * @return string       translated string
 */
function __($word) {
    if (isset($_GET['lang'])) {
        include("langs/".$_GET['lang'].".php");
    }

    return isset($translations[$word]) ? $translations[$word] : $word;
}

/**
 * Translate wrapper with echo functionality
 *
 * @param  string $word word to translate
 * @return null         instead of return it echoes the result
 */
function _e($word) {
    echo __($word);
}