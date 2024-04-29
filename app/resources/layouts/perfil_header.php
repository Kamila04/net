<?php
function perfil_header($args = [], $sesion = null){
?>

<?php
    if (isset($args['styles'])) {
        foreach ($args['styles'] as $s) {
            echo_link_style($s);
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GREENNET</title>
    <link rel="shortcut icon" type="image/x-icon" href="/resources/img/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel="stylesheet">
</head>
<body>
    <header>
        <div class="logo" id="logo">
            <a onclick="app.view('home')"><img src="/resources/img/logo.png" alt="Logo del foro" class="img-logo"></a>
            <h1 class="nombre-logo">GreenNet</h1>
        </div>
        <div class="perfil">
            <p class= "nombre-perfil"><?php echo isset($sesion->user) ? $sesion->user : ""; ?></p>
            <img src= "/resources/img/perfil.jpg" alt="Foto de perfil" class="img-perfil" id="perfil_Icono">
        </div>
    </header>
<?php }?>