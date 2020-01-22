<?php
function validar($title,$description){
    $validation=false;
    if(trim($title)=== ''|| trim($description)===''){
        return $validation =true;
    }
    return $validation=false;
}

  function newTask( $title,$description) {
    include('db.php');
    if(validar($title,$description) == 1){
    $_SESSION['message'] = 'Llene todos los campos';
    $_SESSION['message_type'] = 'danger';
   return  header('Location: index.php'); 
   }
    $query = "INSERT INTO task(title, description) VALUES ('$title', '$description')";
    $resultQuery = mysqli_query($conn, $query);
    if(!$resultQuery){
        die('Query failed');
    }
    $_SESSION['message'] = 'Tarea guardada';
    $_SESSION['message_type'] = 'success';
   return  header('Location: index.php');
   
}; 

//verificar si llega los datos a save_task.php
if(isset($_POST['save_task'])){
    $title = $_POST['title'];
    $description = $_POST['description']; 
    newTask($title,$description);
}
?>