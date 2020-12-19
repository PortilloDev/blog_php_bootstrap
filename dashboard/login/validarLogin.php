<?php
//cargar las clases dinamicamente

spl_autoload_register( function ( $class ){
    include "../../class/$class/$class.class.php";
});

//validación de datos introducidos
if (isset($_POST['submit'])) {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if (empty( $email ) or empty( $password )){
        header('location: login.php?message=Usuario o contraseña no introducidos');
    }
    //'OR'1'='1
    $login = new Login(new Conexion);
    $login->setEmail($email);
    $login->setPassword($password);
    $data = $login->signIn();
    if ($data){
        $session = new Session();
        $session->addValue('email', $data['email']);
        $session->addValue('id', $data['id']);
        $session->addValue('usuario', $data['usuario']);
        header('location: ../dashboard.php');
    }else{
       header('location: login.php?message=Usuario o contraseña incorrectos&type=warningMessage');
    }


}
