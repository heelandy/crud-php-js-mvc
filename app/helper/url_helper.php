<?php   
    function redirect($page){
        header('location:' . RUTA_URL . $page .'.php');
    }