<?php 

    include('../config/constants.php'); 
    include('login-check.php');

?>


<html>
    <head>
        <title>Tacos Los Carnales</title>

        <link rel="stylesheet" href="../css/admin.css">
    </head>
    
    <body>
        <!-- Menu Section Starts -->
        <div class="menu text-center">
            <div class="wrapper">
                <ul>
                    <li><a href="index.php">Menú</a></li>
                    <li><a href="manage-category.php">Categoría</a></li>
                    <li><a href="manage-food.php">Comidas</a></li>
                    <li><a href="manage-order.php">Sección de Órdenes</a></li>
                    <li><a href="manage-admin.php">Config Admin</a></li>
                    <li><a href="logout.php">Salida</a></li>
                </ul>
            </div>
        </div>
        <!-- Menu Section Ends -->