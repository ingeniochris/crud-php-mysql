<?php
    session_start();
$conn = mysqli_connect(
    'localhost',
    'khristian',
    '12345678',
    'php_crud_mysql'
);

//Prueba para revisar conneccion a db
/*if(isset($conn)){
    echo 'DB is connected';
}*/


?>