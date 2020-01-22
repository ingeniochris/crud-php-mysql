<?php
    session_start();
 //Conneccion localhost mysql
/*$conn = mysqli_connect(
    'localhost',
    'khristian',
    '12345678',
    'php_crud_mysql'
);

Prueba para revisar conneccion a db
if(isset($conn)){
    echo 'DB is connected';
}*/



$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = new mysqli($server, $username, $password, $db);
if(isset($conn)){
  //  echo 'DB is connected';
}
?>