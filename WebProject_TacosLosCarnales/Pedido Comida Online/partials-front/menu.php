<?php include('config/constants.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- responsivo -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos Online Tacos Los Carnales</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Navbar  -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="images/logo1.png" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="<?php echo SITEURL; ?>">Inicio</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>categories.php">Categorias</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>foods.php">Comidas</a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/tacosloscarnalesmuybuenos">Contacto</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
