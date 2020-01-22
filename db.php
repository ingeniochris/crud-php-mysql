<?php
    session_start();
/*$conn = mysqli_connect(
    'localhost',
    'khristian',
    '12345678',
    'php_crud_mysql'
);

//Prueba para revisar conneccion a db
if(isset($conn)){
    echo 'DB is connected';
}*/

$url = getenv('JAWSDB_MARIA_URL');
$dbparts = parse_url($url);

$hostname = $dbparts['host'];
$username = $dbparts['user'];
$password = $dbparts['pass'];
$database = ltrim($dbparts['path'],'/');

// Create connection
$conn = new mysqli($hostname, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connection was successfully established!";

?>