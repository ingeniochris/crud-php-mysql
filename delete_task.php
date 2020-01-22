
<?php 
include('db.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM task WHERE id= $id";
    $resultQuery = mysqli_query($conn, $query);

    if(!$resultQuery){
        die('query failed');
    }

    $_SESSION['message'] = 'Tarea borrada';
    $_SESSION['message_type'] = 'danger';
    header('Location: index.php');
    

}


?>
