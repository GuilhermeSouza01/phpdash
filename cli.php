<?php

include __DIR__ . "/src/Framework/Database.php";

use Framework\Database;
use Dotenv\Dotenv;

$db = new Database('mysql', [
    'host' => 'localhost',
    'port' => 3306,
    'dbname' => 'phpdash'
], 'root', '');

$sqlFile = file_get_contents("./database.sql");
$db->query($sqlFile);
