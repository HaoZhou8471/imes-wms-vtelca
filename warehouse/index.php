<?php include "includes/header.php" ?>
<link rel="stylesheet" href="css/main.css">
    <div class = "body_sec">
<head>
	<title>Mi página de inicio</title>
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
		}
		.btn{
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			background-color: #4CAF50;
			color: white;
			font-size: 16px;
			cursor: pointer;
			margin: 10px;
		}
		.btn:hover{
			background-color: #3e8e41;
		}
	</style>
</head>
<body>
	<div class="container">
        <button class="btn" onclick="window.location.href='admin_login.php'">Iniciar sesión como Administrador</button>
        <button class="btn" onclick="window.location.href='includes/login.php'">Iniciar sesión como Administrador</button>
        <button class="btn" onclick="window.location.href='customers/cstmr_login.php'">Iniciar sesión como Cliente</button>
		
	</div>
</body>
</html>         