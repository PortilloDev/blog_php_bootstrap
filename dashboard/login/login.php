<?php
//captura los mensajes a la página
$message = $_GET['message'] ?? ''; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Blog</title>
    <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/sigin.css">
</head>
<body>
    <div class="container">
    <form class="form-signin" method="post" action="validarLogin.php">
        <img class="mb-4" src="/docs/4.5/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Sign in</h1>
        <?php echo $message; ?>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address"  autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" >
        
        <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Sign in</button>
    
    </form>
    </div>
</body>
</html>