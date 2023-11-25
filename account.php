<?php
require 'includes/funciones.php';
incluirTemplate('header', false);
?>

    <form action="/admin/index.php">
        <fieldset>
            <legend>Inicio de Sesion</legend>
            <label for="">Usuario o Correo</label>
            <input type="email" placeholder="Email">
            <label for="">Password</label>
            <input type="password" placeholder="Password">
        </fieldset>
        <input type="submit" value="Enviar">
    </form>

<?php
incluirTemplate('footer');
?>