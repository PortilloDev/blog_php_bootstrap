<?php 

if(!isset($_POST['categorie'])) exit('Hubo un error. No se recibió la categoria');

require_once $_SERVER['DOCUMENT_ROOT'].'PHP_BLOG/db/config.php';
spl_autoload_register( function ( $class ){
    include "../class/$class/$class.class.php";
});


$categorie = new Categorie(new Conexion);
$categorie->setName($_POST['categorie']);

if($categorie->insert())
    return 'ok';
return 'ko';