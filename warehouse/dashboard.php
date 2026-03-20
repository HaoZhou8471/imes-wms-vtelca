<!-- This is the dashboard page -->
<?php include "includes/db_conn.php"?><!-- db connection -->
<?php include "includes/menu.php"?>
<link rel="stylesheet" href='css/main.css'>
<link rel="stylesheet" href="css/cards.css">

<div class = "body_sec">
        <section id="Content">
                <h3>PANEL DE CONTROL WMS</h3>
                <hr/>
<!-- Cards in the dashboard page -->
					<!-- Home card -->
					<div class="card">
					  <div class="card-header"><a href="home.php">Home</a></div>
					  <div class="card-main">
					    <a href="home.php"><img src='image/home.png'></a>
					    <div class="main-description"></div>
					  </div>
					</div>
					<!--  -->
					<div class="card">
					  <div class="card-header"><a href="add_warehouse.php">Add Warehouse</a></div>
					  <div class="card-main">
					    <a href="add_warehouse.php"><img src='image/add.png'></a>
					    <div class="main-description"></div>
					  </div>
					</div>
					<!--  -->
					<div class="card">
					  <div class="card-header"><a href="add_product.php">Add Product</a></div>
					  <div class="card-main">
					    <a href="add_product.php"><img src='image/cart.png'></a>
					    <div class="main-description"></div>
					  </div>
					</div>
					<!--  -->
					<div class="card">
					  <div class="card-header"><a href="whs_report.php">Informe de almacén</a></div>
					  <div class="card-main">
					    <a href="whs_report.php"><img src='image/report.png'></a>
					    <div class="main-description"></div>
					  </div>
					</div>
					<!--  -->
						<div class="card">
					  <div class="card-header"><a href="prd_report.php">Informe de producto</a></div>
					  <div class="card-main">
					    <a href="prd_report.php"><img src='image/chart.png'></a>
					    <div class="main-description"></div>
					  </div>
					</div>
						<div class="card">
					  <div class="card-header">Todos los almacenes</div>
					  <div class="card-main">
					    <a href="all_warehouse.php"><img src='image/warehouse.png'></a>
					    <div class="main-description"></div>
					  </div>
					</div>
					<!--  -->
						<div class="card">
					  <div class="card-header">Todos los productos</div>
					  <div class="card-main">
					     <a href="all_products.php"><img src='image/products.png'></a>
					    <div class="main-description"></div>
					  </div>
					</div>

					<!--  -->
						<div class="card">
					  <div class="card-header">Todos los pedidos</div>
					  <div class="card-main">
					     <a href="all_orders.php"><img src='image/order.png'></a>
					    <div class="main-description"></div>
					  </div>
					</div>



            </div>
<div class="card-header">© 2014-2026 VTELCA - ZTE iMES Implementation</div>
                </div>

        		
        	</div>
        </section>
