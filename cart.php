<!-- include header.php -->
<?php include 'includes/header.php'; ?>
<?php
// include 'includes/slider.php'; 
?>

<div class="homeVehicles">
    <div class="container">
        <div class="container-header">
            <h3>YOUR CART</h3>
        </div>

        <div class="flex-container">
            <div class="row justify-content-center align-items-center" style="width: 100%;">
                <table class="table table-striped" id="example" style="max-width: 90%;">
                    <thead>
                        <tr>
                            <th>Serial No.</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $products = $product->show_product();
                        if ($products) {
                            $i = 0;
                            while ($result = mysqli_fetch_array($products)) {
                                $i++;
                        ?>
                                <tr>
                                    <th scope="row" class="product_id"><?php echo $i ?></th>
                                    <td>
                                        <img src="<?php echo $result['productImage']; ?>" alt="Product Image" style="max-width: 200px; max-height: 100px;">
                                    </td>
                                    <td><?php echo $result['productName'] ?></td>
                                    <td><?php echo $result['catName'] ?></td>
                                    <td><?php echo $result['productPrice'] ?></td>
                                    <td>
                                        <a href="#" class="btn btn-info text-decoration-none edit_data">Add</a>
                                        <!-- Nút Delete kích hoạt modal xác nhận xóa -->
                                        <button type="button" class="btn btn-danger text-decoration-none" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

    <!-- //////// FOOTER ///////// -->
    <?php include 'includes/footer.php'; ?>