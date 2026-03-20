<?php include "includes/header.php" ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    body { background-image: url("image/large_warehouse.jpg"); background-size: cover; }
    .grid-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 30px;
        margin-top: 50px;
    }
    .icon-item {
        flex: 0 0 28%; /* 核心：让每排显示 3 个 */
        text-align: center;
        background: rgba(0,0,0,0.6);
        padding: 20px;
        border-radius: 10px;
    }
    .icon-item i { font-size: 60px !important; color: #FFD700; margin-bottom: 10px; }
    .icon-item p { color: white; font-weight: bold; }
</style>

<div class="container">
    <h1 style="color: white; text-align: center; margin-top: 30px;">Funciones Core iMEI - VTELCA</h1>
    <div class="grid-container">
        <div class="icon-item"><i class="fa fa-archive"></i><p>Almacén</p></div>
        <div class="icon-item"><i class="fa fa-barcode"></i><p>Escaneo</p></div>
        <div class="icon-item"><i class="fa fa-truck"></i><p>Logística</p></div>
        <div class="icon-item"><i class="fa fa-users"></i><p>Usuarios</p></div>
        <div class="icon-item"><i class="fa fa-database"></i><p>Base ZTE</p></div>
        <div class="icon-item"><i class="fa fa-check-square"></i><p>Calidad</p></div>
        <div class="icon-item"><i class="fa fa-line-chart"></i><p>Reportes</p></div>
        <div class="icon-item"><i class="fa fa-cogs"></i><p>Ajustes</p></div>
        <div class="icon-item"><i class="fa fa-history"></i><p>Legado</p></div>
    </div>
</div>