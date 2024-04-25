<html>
    <head>
        <link rel="stylesheet" href="css/styles.css" />
        <link rel="stylesheet" href="css/header.css" />
        <link rel="stylesheet" href="css/main_index.css" />
        <link rel="stylesheet" href="css/footer.css" />
        <link rel="stylesheet" href="css/productdetail.css" />
        <style>
            .products {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-around; 
            }

            .product-row {
                display: flex;
                justify-content: center;
                margin-bottom: 20px; 
            }

            .product {
                flex: 0 1 30%; 
                box-sizing: border-box;
                margin: 10px; 
                padding: 10px;
                border: 0px solid #ccc;
                text-align: center; 
            }
        </style>
    </head>
</html>
<?php 
include_once $_SERVER['DOCUMENT_ROOT'] . '/BTL/eco_kawasaki-main/includes/header.php';

// Assuming the mysqli connection is set
include 'lib/database_b.php';
$query = "SELECT productId, productName, productDesc, productPrice, productImage FROM tbl_product";
$stmt = $conn->prepare($query);
$stmt->execute();
$result = $stmt->get_result();

// echo "<br>";
// echo "<div class='container-header'>";
// echo "<h3>PRODUCTS LIST</h3>";
// echo "</div>";
echo "<div class='products'>";


$product_count = 0;

while ($row = $result->fetch_assoc()) {
    if ($product_count % 3 == 0) {
        if ($product_count != 0) {
            echo "</div>";
        }
        echo "<div class='product-row'>";
    }
    $product_feathered = $product->getproduct_feathered();
    $result_pf=$product_feathered->fetch_assoc();	
    echo "<div class='product'>";
    echo "<a href='productdetail.php?productId=" . $result_pf['productId'] . "' style='color: inherit; text-decoration: none;'>";
    echo "<img src='" . htmlspecialchars($row['productImage']) . "' alt='Product Image' style='width: 100%; height: auto;'>";
    echo "<h2 class='p3'>" . htmlspecialchars($row['productName']) . "</h2>";
    echo "<div class='cart-greenSpacer'></div>";
    // echo "<p class='disclaimer'>" . htmlspecialchars($row['productDesc']) . "</p>";
    echo "<p>Price: " . htmlspecialchars($row['productPrice']) . "đ</p>";
    echo "</a>";
    echo "</div>";

    $product_count++;
}

if ($product_count % 3 != 0) {
    echo "</div>"; 
}

echo "</div>";
include 'includes/footer.php';
?>
