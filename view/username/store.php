<?php
    require_once ("c://xampp/htdocs/crud_mvc_php/controller/usernamecontroller.php");
    $obj = new usernameController();
    $obj->guardar($_POST['nombre']);
?>