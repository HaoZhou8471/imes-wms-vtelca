<?php
header("Content-Type: application/json; charset=UTF-8");
include_once '../includes/config.php'; // 假设你的数据库连接配置在这里

// 简单的 API 逻辑：获取库存列表
$query = "SELECT id, name, quantity, category FROM products LIMIT 10";
$result = mysqli_query($db, $query);

$products_arr = array();

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        array_push($products_arr, $row);
    }
    http_response_code(200);
    echo json_encode(array("status" => "success", "data" => $products_arr));
} else {
    http_response_code(404);
    echo json_encode(array("status" => "error", "message" => "No products found."));
}
?>