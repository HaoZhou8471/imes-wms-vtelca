<div class="panel-produccion" style="margin: 30px auto; width: 90%; max-width: 1200px; padding: 25px; background-color: #ffffff; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.05); border-top: 4px solid #0056b3;">
    <h3 style="color: #333; border-bottom: 2px solid #f0f0f0; padding-bottom: 15px; margin-top: 0; font-family: Arial, sans-serif;">
        📊 Panel de Progreso de Producción (Órdenes Activas)
    </h3>

    <?php
    // 注意：这里假设你的数据库连接变量是 $conn。
    // 如果你的连接变量是 $conexion 或 $db，请将下方的 $conn 替换为你实际的变量名。

    // 查询刚才创建的 production_orders 表
    $sql_po = "SELECT order_number, product_name, target_quantity, completed_quantity, status FROM production_orders ORDER BY start_date DESC";
    $result_po = $conn->query($sql_po);

    if ($result_po && $result_po->num_rows > 0) {
        while($row = $result_po->fetch_assoc()) {

            // 计算完成百分比，避免除以 0 的错误
            $porcentaje = ($row['target_quantity'] > 0) ? round(($row['completed_quantity'] / $row['target_quantity']) * 100) : 0;

            // 根据工单状态（Status）动态分配拉美客户习惯的红绿灯颜色体系
            $color_barra = "#28a745"; // 默认绿色 (Completado - 已完成)
            $texto_color = "#28a745";

            if($row['status'] == 'En Producción') {
                $color_barra = "#007bff"; // 蓝色 (生产中)
                $texto_color = "#0056b3";
            } elseif($row['status'] == 'Pendiente') {
                $color_barra = "#ffc107"; // 黄色 (待定)
                $texto_color = "#d39e00";
            } elseif($row['status'] == 'Control de Calidad') {
                $color_barra = "#17a2b8"; // 青色 (质检中)
                $texto_color = "#117a8b";
            }
            ?>

            <div class="orden-item" style="margin-top: 25px; font-family: Arial, sans-serif;">
                <div style="display: flex; justify-content: space-between; margin-bottom: 8px; font-size: 15px;">
                    <span style="font-weight: bold; color: #444;">
                        🏭 <?php echo $row['order_number']; ?> | <span style="font-weight: normal;"><?php echo $row['product_name']; ?></span>
                    </span>
                    <span style="font-weight: bold; color: <?php echo $texto_color; ?>;">
                        <?php echo $row['status']; ?> (<?php echo $row['completed_quantity']; ?> / <?php echo $row['target_quantity']; ?> Unds)
                    </span>
                </div>

                <div style="width: 100%; background-color: #e9ecef; border-radius: 6px; height: 22px; overflow: hidden; box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);">
                    <div style="width: <?php echo $porcentaje; ?>%; background-color: <?php echo $color_barra; ?>; height: 100%; text-align: center; color: white; font-size: 13px; font-weight: bold; line-height: 22px; transition: width 0.8s ease-in-out;">
                        <?php echo $porcentaje; ?>%
                    </div>
                </div>
            </div>

            <?php
        }
    } else {
        // 如果没有数据时的空状态展示
        echo '<p style="color: #888; padding: 20px 0; text-align: center;">No hay órdenes de producción registradas en este momento.</p>';
    }
    ?>
</div>