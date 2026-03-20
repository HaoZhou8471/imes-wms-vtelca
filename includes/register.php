<?php include "header.php"?>
<link rel="stylesheet" href="../css/main.css">
<link rel="stylesheet" href="../css/style.css">
<div class = "body_sec">
        <section id="Content">
        	<div class="lcard">
    <form action="signup-check.php" method="post">
                       
        <h2>INSCRIBIRSE</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Nombre</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"><br>
          <?php }?>

          <label>Nombre de Usuario</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>


        <label>Contraseña</label>
        <input type="password" 
                 name="password" 
                 placeholder="Password"><br>

          <label>Re-contraseña</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Re_Password"><br>
        <button type="submit">Sign Up</button>
          <a href="login.php" class="ca">Login Instead</a>
     