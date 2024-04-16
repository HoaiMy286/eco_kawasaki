<!-- include header.php -->
<?php include 'includes/header.php'; ?>

<?php
if (!isset($_GET['productId']) || $_GET['productId'] == NULL) {
    echo "<script>window.location='index.php'</script>";
    exit();
} else {
    $id = $_GET["productId"];
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $updateProduct = $product->update_product($_POST, $_FILES, $id);
}
?>

<?php
$get_product_name = $product->getproductbyId($id);
if ($get_product_name) {
    while ($result_product = $get_product_name->fetch_assoc()) {
?>
        <div class="adver-detail" style="background: #202021;">
            <div class="adver-avatar-detail" id="adverAvatarDetail">
                <img src="<?php echo $result_product['productImage_1'] ?>" alt="Logo">
            </div>
            <div class="adver-caption-detail">
                <div class="adver-container-detail">
                    <div class="adver-infor-cap-detail">
                        <h2><?php echo $result_product['productName'] ?></h2>
                        <div class="greenSpacer-detail"></div>
                        <h3>Price: <?php echo $result_product['productPrice'] ?>vnd</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="productDesc">
            <div class="product-container">
                <div class="container-header">
                    <h3>SPECIFICATIONS</h3>
                </div>
                <div class="product-row">
                    <div class="col-sm-12 col-md-7">
                        <div class="product-main">
                            <img src="<?php echo $result_product['productImage'] ?>" alt="Product Image" />
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-5 product-desc">
                        <div class="product-desc-detail">
                            <div class="flex-container-summary-row1">
                                <p class="p3"><?php echo $result_product['productName'] ?></p>
                                <div class="greenSpacer-productdetail"></div>
                                <h4>Price: <?php echo $result_product['productPrice'] ?>vnd</h4>
                            </div>
                            <div class="flex-container-summary-row2">
                                <button class="btn btn-primary" type="submit">Add to cart</button>
                            </div>
                        </div>
                        <p class="disclaimer"></p>
                        <p class="disclaimer">Khối lượng bản thân bao gồm tất cả các vật liệu cần thiết và chất lỏng để vận hành một cách chính xác, bình chứa nhiên liệu (dung tích hơn 90%) và bộ dụng cụ (nếu được cung cấp). </p>
                        <p class="disclaimer">KAWASAKI CARES: luôn đội mũ bảo hiểm, bảo vệ mắt và trang phục bảo hộ. Không bao giờ lái xe khi uống rượu hoặc chất gây nghiện. Đọc thêm sổ hướng dẫn sử dụng và các cảnh báo trên sản phẩm. Người lái xe chuyên nghiệp thể hiện mình trên trường đua. Công ty TNHH Kawasaki Motors Việt Nam. 2019</p>
                        <p class="disclaimer">Thông số kỹ thuật và giá cả có thể thay đổi.</p>
                    </div>
                </div>
                <!-- ////////////////////////////////// -->
                <div class="accordion" id="accordionExample" style="padding: 40px">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                Description
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <?php echo nl2br($result_product['productDesc']); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="productDesc" style="background: #202021;">
            <div class="product-container">
                <div class="container-header" style="color: white;">
                    <h3>LIBRARY</h3>
                </div>
                <div class="product-image">
                    <div class="col-sm-6 col-md-4">
                        <img class="lazyload" src="<?php echo $result_product['productImage_1'] ?>" alt="Logo">
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <img class="lazyload" src="<?php echo $result_product['productImage_2'] ?>" alt="Logo">
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <img class="lazyload" src="<?php echo $result_product['productImage_3'] ?>" alt="Logo">
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <img class="lazyload" src="<?php echo $result_product['productImage_4'] ?>" alt="Logo">
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <img class="lazyload" src="<?php echo $result_product['productImage_5'] ?>" alt="Logo">
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <img class="lazyload" src="<?php echo $result_product['productImage_6'] ?>" alt="Logo">
                    </div>
                </div>
            </div>
        </div>

<?php
    }
}
?>

<!-- //////// FOOTER ///////// -->

<?php include 'includes/footer.php'; ?>