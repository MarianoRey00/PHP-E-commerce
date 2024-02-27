<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <?php
    $authenticated = true;
    ?>
    <header>
        <div class="oferta">
            <p>¡12 Cuotas sin interes en toda la página durante el 1, 2 y 3 de Marzo!</p>
        </div>
        <nav>
            <ul class="Navbar">
                <div class="logo">
                    Logo
                </div>
                <div class="links">
                    <li><a href="">Home</a></li>
                    <li><a href="">Productos</a></li>
                    <li><a href="">Contacto</a></li>
                    <?php
                    if($authenticated):
                    ?>
                        <li><a href="">Mi perfil</a></li>
                        <li><a href="">Cerrar sesión</a></li>
                    <?php
                    else: 
                    ?>
                        <li><a href="">Iniciar sesión</a></li>
                        <li><a href="">Register</a></li>
                    <?php
                    endif;
                    ?>
                </div>
                
            </ul>
        </nav>
    </header>
    <h1>Empezando con PHP</h1>
    <?php
    $notaMaxima = 10;
    echo $notaMaxima;
    ?>
</body>
</html>