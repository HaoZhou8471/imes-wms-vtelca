<?php include "header2.php"?>
<link rel="stylesheet" href="../css/main.css">
<link rel="stylesheet" href="../css/style.css">
<style>
	body{
			background-image: url("../image/large_warehouse.jpg");
			background-size: cover;
			background-position: center;
			background-repeat: no-repeat;
			height: 100vh;
		}
	</style>
<div class = "body_sec">
        <section id="Content">
        	<div class="lcard">
        	<form action="login-check.php" method="post">
                <h2>INICIO DE SESIÓN DE USUARIO</h2>
                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
                <label>Nombre de usuario</label>
                <input type="text" name="uname" placeholder="Nombre de usuario"><br>

                <label>Contraseña</label>
                <input type="password" name="password" placeholder="Contraseña"><br>

                <button type="submit">Iniciar sesión</button>
                <a href="../admin_login.php" class="ca">Inicio de sesión de administrador</a>
                <br/><br/>
			       
     </form>
 </div>

</div>