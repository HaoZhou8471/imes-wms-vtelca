<!-- Adding styles -->
<?php include "includes/menu.php"?>
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/style.css">
<div class = "body_sec">
        <section id="Content">
            <div class="lcard">
               <form action="includes/signup-check.php" method="post">
                                   <!-- Login form fields -->
                    <h2>AGREGAR USUARIO DEL SISTEMA</h2>
                    <?php if (isset($_GET['error'])) { ?>
                         <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>

                         <?php if (isset($_GET['success'])) { ?>
                              <p class="success"><?php echo $_GET['success']; ?></p>
                         <?php } ?>

                   <label>Seleccionar Almacén</label><br/>
                   <select name="wname" id="wname">
                       <?php
                       include "includes/db_conn.php";
                       $records = mysqli_query($conn, "SELECT * from warehouse");
                       while($data=mysqli_fetch_array($records)) {
                           // 注意这里必须是 </option> 而不是 </form>
                           echo "<option value='".$data['Whs_Name']."'>".$data['Whs_Name']."</option>";
                       }
                       ?>
                   </select><br>
                    <label>Contraseña</label>
                    <input type="password" 
                              name="password" 
                              placeholder="Password"><br>
               <!-- Password confirmation...The passwords are merged above -->
                         <label>Recontraseña</label>
                         <input type="password" 
                              name="re_password" 
                              placeholder="Re_Password"><br>
                    <button type="submit">Agregar Usuario</button>
                                                  </div>
                           