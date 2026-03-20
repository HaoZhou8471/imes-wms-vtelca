
<?php include "includes/db_conn.php"?>
<?php include "includes/menu.php"?>
    <link rel="stylesheet" href='css/main.css'>
    <link rel="stylesheet" href="css/cards.css">



<div class = "body_sec">
    <section id="Content">
        <h3>PANEL DE CONTROL iMES - VTELCA</h3>
        <hr/>
        <div class="card">
            <div class="card-header"><a href="home.php">Inicio</a></div>
            <div class="card-main">
                <a href="home.php"><img src='image/home.png'></a>
            </div>
        </div>
        <div class="card">
            <div class="card-header"><a href="add_warehouse.php">Agregar Almacén</a></div>
            <div class="card-main">
                <a href="add_warehouse.php"><img src='image/add.png'></a>
            </div>
        </div>
        <div class="card">
            <div class="card-header"><a href="add_product.php">Agregar Producto</a></div>
            <div class="card-main">
                <a href="add_product.php"><img src='image/cart.png'></a>
            </div>
        </div>
        <div class="card">
            <div class="card-header"><a href="add_user.php">Agregar Usuario</a></div>
            <div class="card-main">
                <a href="add_user.php"><img src='image/user.png'></a>
            </div>
        </div>
        <div class="card">
            <div class="card-header"><a href="whs_report.php">Informe de Almacén</a></div>
            <div class="card-main">
                <a href="whs_report.php"><img src='image/report.png'></a>
            </div>
        </div>
        <div class="card">
            <div class="card-header"><a href="prd_report.php">Informe de Inventario</a></div>
            <div class="card-main">
                <a href="prd_report.php"><img src='image/chart.png'></a>
            </div>
        </div>
    </section>
</div></br>
<?php include "includes/footer.php"?>


