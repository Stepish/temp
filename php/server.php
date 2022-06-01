<?php

include 'db.php';
$zapros = "SELECT * FROM `products` INNER JOIN `categories`  WHERE products.id_categories=categories.categories_id";
$result = $con->query($zapros);
$con->close();
$a = [];
while ($row = mysqli_fetch_assoc($result)) {
    $a[$row['categories_name']][] = $row['product_name'];
};

if ($result->num_rows == 0) {
    $response = [
        'status' => 'error'
    ];
} else {
    $response = [
        'status' => 'Ok',
        'products' => $a
    ];
}

echo json_encode($response);
