<?php
    require_once ("c://xampp/htdocs/crud_mvc_php/view/head/head.php");
    // Esto incluye el archivo head.php que contiene la estructura HTML básica y los enlaces a Bootstrap
    require_once ("c://xampp/htdocs/crud_mvc_php/controller/usernamecontroller.php");
    // Esto incluye el archivo usernamecontroller.php que contiene la lógica del controlador para manejar las solicitudes

    $obj = new usernameController();
    // Crea una instancia del controlador de usuario
    $date = $obj->show($_GET['id']);
    // Llama al método show del controlador para obtener los detalles del usuario por ID

    
?>

<h2 class="text-center">DETALLES DEL REGISTRO</h2>

<div class="pb-3">
    <a href="index.php" class="btn btn-primary">Regresar</a>
    <a href="edit.php?id=<?=$date[0] ?>" class="btn btn-success">Actualizar</a>

    <!-- Button trigger modal -->
    <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">¿Desar eliminar el registro?</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Una vez eliminado no se podra recuperar el registro
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>
            <a href="delete.php?id=<?=$date[0] ?>" class="btn btn-danger">Eliminar</a>
        </div>
        </div>
    </div>
    </div>
</div>

<table class="table container-fluid">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="col"><?= $date[0] ?></td>
            <td scope="col"><?= $date[1] ?></td>
            <!-- Muestra el ID y el nombre del usuario obtenido del controlador -->
            <!-- Utiliza la sintaxis corta de PHP para imprimir los valores directamente en el HTML -->
        </tr>
    </tbody>
</table>



<?php
    require_once ("c://xampp/htdocs/crud_mvc_php/view/head/footer.php");
    // Esto incluye el archivo footer.php que contiene el cierre de la estructura HTML
?>