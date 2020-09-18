<?php
    session_start();
    include_once("./scripts.php");
    include_once("../classes/Crud.php");
    include_once("../classes/Validation.php");
    $script= new script();
    $crud = new Crud();
    $validation = new Validation();
    $result=$script->log_out();
    if( $result){
        $script->redirect('login');
    }
    else{
        echo "sorry";
    }

?>