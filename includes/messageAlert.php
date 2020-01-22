



<div class="sticky-top  float-sm-right">
<?php if(isset($_SESSION['message'])) { ?>
    <div class="alert alert-<?=$_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
       <strong><?= $_SESSION['message']?> </strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php session_unset(); }   ?>
</div>



