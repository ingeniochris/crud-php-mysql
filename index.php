<?php include('db.php')?>
<?php include('includes/header.php')?>

<?php include('includes/messageAlert.php')?>
<div class="container pt-4">
        
        <div class="row">
                <div class="col-md-3">
                    <div class="card">
                                    <div class="card-header">
                                        <h2>Agregar Tarea</h2>
                                    </div>
                                        <div class="card-body">
                                        <form action="save_task.php" method="POST">
                                                    <div class="form-group">
                                                    <input type="text" name="title" class="form-control" placeholder="Titulo de la tarea">
                                                    </div>
                                                    <div class="form-group">
                                                <textarea type="text" name="description" class="form-control" placeholder="Descripcion de la tarea"></textarea>
                                                </div>
                                        
                                        <input type="submit" class="btn btn-success " name="save_task" value="Guardar Tarea">  
                                            
                                        
                                        </form>
                                    </div>
                    </div>
                </div>


                <div class="col-md-8">
                <table class="table ">
                    <thead>
                        <tr>
                           
                            <th scope="col">Tarea</th>
                            <th scope="col">Descripción</th>
                            
                            <th scope="col">Acción</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $query = 'SELECT * FROM task';
                            $result_task = mysqli_query($conn, $query);
                            while($row = mysqli_fetch_array($result_task)){ ?>
                            <tr>
                           
                            <th><button type="button" class="btn btn-outline-info" data-container="body" data-toggle="popover" data-placement="top" data-content="Creada el: <?php echo $row['created_at']?>">
                            <?php echo $row['title']?>
</button></th>
                            
                            <td><?php echo $row['description']?></td>
                            
                            <td>
                                <a class="btn btn-light" href="edit.php?id=<?php echo $row['id']?>"><img src="https://img.icons8.com/cute-clipart/25/000000/edit.png"></a>
                                <a class="btn btn-light" href="delete_task.php?id=<?php echo $row['id']?>"><img src="https://img.icons8.com/cute-clipart/25/000000/delete-forever.png"></a>
                            </td>
                            </tr>   



                            <?php  }?>
                        
                    </tbody>
                </table>
            </div>
                    
        </div>
</div>


<?php include('includes/footer.php')?>