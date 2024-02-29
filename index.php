<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <?php

    $view = $_GET['v'] ?? 'home';
    
    if(!file_exists('views/' . $view . '.php')) {
        $view = '404';
    }
    $authenticated = true;

    $products = [
        [
            'titulo' => 'Reloj 1',
            'descripcion' => 'Descripcion adsdsadas',
            'precio' => '800',
            'image' => './imgs/reloj1.webp'
        ],
        [
            'titulo' => 'Reloj 2',
            'descripcion' => 'Descripcion 2 adsdsadas',
            'precio' => '710',
            'image' => './imgs/reloj2.webp'
        ],
        [
            'titulo' => 'Reloj 3',
            'descripcion' => 'Descripcion 3 adsdsadas',
            'precio' => '530',
            'image' => './imgs/reloj3.webp'
        ],
        [
            'titulo' => 'Reloj 4',
            'descripcion' => 'Descripcion 4 adsdsadas',
            'precio' => '260',
            'image' => './imgs/reloj4.webp'
        ]
    ]

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
                    <li><a href="index.php?v=home">Home</a></li>
                    <li><a href="index.php?v=products">Productos</a></li>
                    <li><a href="index.php?v=contact">Contacto</a></li>
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
    <main>
        <?php
            require 'views/' . $view . '.php';
        ?>
    </main>
    
</body>
</html>