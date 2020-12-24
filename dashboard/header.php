<?php

spl_autoload_register( function ( $class ){
    include "../class/$class/$class.class.php";
});

$session = new Session();

if(! $session->validateSession('id') ){
   
    header('location: login/login.php?message=Debes iniciar sesión&type=warningMessage');
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Iván Portillo, Blog</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/blog/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/css/bootstrap.min.css" rel="stylesheet" >

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../assets/css/blog.css" rel="stylesheet">
  </head>
  <body>
    
<div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <a class="" href="#"> Iván Portillo</a>
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="#">Portillo Blog's</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        
        <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
      </div>
    </div>
  </header>

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <a class="p-2 link-secondary" href="#">Ir al blog</a>
      <a class="p-2 link-secondary" href="post.php">Crear Post</a>
      <a class="p-2 link-secondary" href="dashboard.php">Dashboard</a>
      <a class="p-2 link-secondary" href="#">Cambiar contraseña</a>
      <a class="p-2 link-secondary" href="cerrar_sesion.php">Cerrar sesión</a>
      <a class="p-2 link-secondary" href="#"></a>
      <a class="p-2 link-secondary" href="#"></a>
      <a class="p-2 link-secondary" href="#"></a>
      <a class="p-2 link-secondary" href="#"></a>
      <a class="p-2 link-secondary" href="#"></a>
      <a class="p-2 link-secondary" href="#"></a>
      <a class="p-2 link-secondary" href="#"></a>
    </nav>
  </div>
</div>