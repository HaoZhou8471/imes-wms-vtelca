<?php include "includes/db_conn.php"?>
<?php include "includes/menu.php"?>

<?php
if(isset($_POST['submit']))
{
    $wname = $_POST['wname'];
    $category = $_POST['category'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $desc = $_POST['description'];
    $lct = $_POST['location'];

    // 处理图片上传
    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $image_name = addslashes($_FILES['image']['name']);
    move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/" . $_FILES["image"]["name"]);
    $picture = "uploads/" . $_FILES["image"]["name"];

    // 检查是否重复录入
    $query = mysqli_query($conn,"select * from warehouse where Whs_Name = '$wname'") or die(mysqli_error($conn));
    $count = mysqli_num_rows($query);

    if ($count > 0) {
        echo "<script>alert('Error: El almacén ya existe.')</script>";
    } else {
        // 插入数据到 warehouse 表
        $sql = "INSERT INTO warehouse(Whs_Name, Whs_Category, Contact, Email, Description, Location, Picture) 
                VALUES('$wname', '$category', '$contact', '$email', '$desc', '$lct', '$picture')";
        mysqli_query($conn, $sql) or die(mysqli_error($conn));

        echo "<script>alert('Almacén agregado con éxito')</script>";
    }
}
?>

    <link rel="stylesheet" href="css/main.css">

    <div class="body_sec">
        <section id="Content">
            <div class="cardd">
                <h2>AGREGAR ALMACÉN (ADD WAREHOUSE)</h2>
                <hr/>
                <form method="POST" enctype='multipart/form-data'>
                    <div class="form-group"><br/>
                        <label>Nombre del Almacén</label><br/>
                        <input type="text" name="wname" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Categoría</label><br/>
                        <select name="category" class="form-control">
                            <?php
                            include "includes/db_conn.php";
                            $records = mysqli_query($conn, "SELECT * from whscategory");
                            while($data = mysqli_fetch_array($records)) {
                                echo "<option value='".$data['Category_Name']."'>".$data['Category_Name']."</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Número de Contacto</label><br/>
                        <input type="text" name="contact" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Email</label><br/>
                        <input type="email" name="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Descripción</label><br/>
                        <textarea name="description" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Ubicación (Dirección)</label><br/>
                        <input type="text" name="location" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Imagen del Almacén</label><br/>
                        <input type="file" name="image" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <br/>
                        <input type="submit" name="submit" value="Guardar Almacén" class="btn_save">
                    </div>
                </form>
            </div>
        </section>
    </div>

<?php include "includes/footer.php"?>