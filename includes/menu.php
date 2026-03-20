<?php include "includes/db_conn.php"?>
<link rel="stylesheet" href="../css/main.css">
<!DOCTYPE html>
<html>
<head>
    <title> Almacén VTELCA</title>
    <link rel="stylesheet" href="../css/main.css">
    <nav>
        <div class="logo">WMS</div>
        <ul>


            <li><a href="dashboard.php">Panel</a></li>
            <li><a href="home.php">Sobre</a></li>
            <li>
                <a href="#">Administración</a>

                <ul>
                    <li><a href="add_warehouse.php">+ Sobre</a></li>
                    <li><a href="add_product.php">+ Producto</a></li>
                    <li><a href="add_pcategory.php">+ Categoría de Producto</a></li>
                    <li><a href="add_wcategory.php">+ Categoría de Almacén</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Informes</a>
                <ul>
                    <li><a href="whs_report.php">Informe de almacén</a></li>
                    <li><a href="prd_report.php">Informe de producto</a></li>
                    <li><a href="prd_ctg_report.php">Categoría de producto</a></li>
                    <li><a href="whs_ctg_report.php">Categoría de almacén</a></li>
                    <li><a href="all_products.php">Todos los productos</a></li>
                    <li><a href="all_warehouse.php">Todo el almacén</a></li>
                </ul>

            </li>
            <li>
                <a href="#">Cuentas</a>
                <ul>
                    <li><a href="profile.php">Ver perfil</a></li>
                    <li><a href="add_user.php">Crear usuario</a></li>
                    <li><a href="index.php">Cerrar sesión</a></li>
                </ul>
            </li>
        </ul>
    </nav>

