<?php
/**
 * SimpleLibrary config
 * @var array
 */
$cfg = [
    // database credentials
    "dbHost" => "localhost",
    "dbUser" => "root",
    "dbPass" => "",
    "dbBase" => "simplelibrary"
];


//Set default language if it is not set in URL parametr 'lang'

if ((isset($_GET['lang'])) === FALSE) {
	$_GET['lang'] = 'cs';
}
