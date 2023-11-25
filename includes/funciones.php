<?php 

require 'app.php';

function incluirTemplate(string $nombre, bool $auth = false)
{
    include TEMPLATES_URL . "/{$nombre}.php";
}