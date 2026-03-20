<?php include "includes/header.php" ?>
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="body_sec">
    <head>
        <title>Sobre iMES - VTELCA</title>
        <style type="text/css">
            body{
                background-image: url("image/large_warehouse.jpg");
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                height: 100vh;
            }
            .container{
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                height: 100%;
                color: white;
                background: rgba(0, 0, 0, 0.6);
            }
            .icon-grid {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 30px;
                margin-top: 20px;
                text-align: center;
            }
            .icon-item i { font-size: 50px !important; color: #FFD700; display: block; margin-bottom: 5px; }
            .icon-item p { font-size: 14px; font-weight: bold; }
        </style>
    </head>
    <body>
    <div class="container">
        <h1 style="color: #FFD700;">Funciones Core iMES</h1>
        <div class="icon-grid">
            <div class="icon-item"><i class="fa fa-archive"></i><p>Almacén</p></div>
            <div class="icon-item"><i class="fa fa-barcode"></i><p>Escaneo</p></div>
            <div class="icon-item"><i class="fa fa-truck"></i><p>Logística</p></div>
            <div class="icon-item"><i class="fa fa-users"></i><p>Usuarios</p></div>
            <div class="icon-item"><i class="fa fa-database"></i><p>Base ZTE</p></div>
            <div class="icon-item"><i class="fa fa-check-square"></i><p>Calidad</p></div>
            <div class="icon-item"><i class="fa fa-file-text"></i><p>Reportes</p></div>
            <div class="icon-item"><i class="fa fa-cogs"></i><p>Configuración</p></div>
            <div class="icon-item"><i class="fa fa-history"></i><p>Legado 2014</p></div>
        </div>
    </div>
    </body>
    </html>