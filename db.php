<?php
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','todo-list');
$conn = new mysqli(DB_HOST,
            DB_USER,
                DB_PASS,
                    DB_NAME );
if ($conn->connect_error) {
    die ("Connection fauled: " . $conn->connect_error);
}                 

