<script src="ind.js"></script>

<?php 

// Include database connection
require("inc/db.php");

try {
    // Create sql statment
    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);

} catch (Exception $e) {
    echo "Error " . $e->getMessage();
    exit();
}

?>
<?php include("inc/header.php") ?>
<div class="container">
    <?php if (isset($_GET['status']) && $_GET['status'] == "deleted") : ?>
        <div class="alert alert-success" role="alert">
            <strong>Deleted</strong>
        </div>
    <?php endif ?>
    <?php if (isset($_GET['status']) && $_GET['status'] == "fail_delete") : ?>
        <div class="alert alert-danger" role="alert">
            <strong>Fail Delete</strong>
        </div>
    <?php endif ?>
    <!-- Table Product -->

    <div class="card border-danger">
        <div class="card-header bg-danger text-white">
            <strong><i class="fa fa-database"></i> Products</strong>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <h5 class="card-title float-left">Table Products</h5>
                    <a href="create.php" class="btn btn-success float-right mb-3"><i class="fa fa-plus"></i> Add New</a>
                </div>
            </div>
            <table class="table table-bordered table-striped">
                <thead>
                    <?php
$urls = '<input type="url" class="form-control" id="barcode" name="barcode" placeholder="Barcode" required>';

$img =' <img src = "$urls" >' ;
  ?>
                    <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th></th>

                    </tr>
                </thead>
                <tbody>
                    <?php if ($result->rowCount() > 0) : ?>
                        <?php foreach ($result as $product) : ?>
                            <tr>
                                <td><?= $product['barcode'] ?></td>
                                <td><?= $product['name'] ?></td>
                                <td>$<?= number_format($product['price'], 2) ?></td>
                                <td><?= $product['qty'] ?></td>
          
                            </tr>
                        <?php endforeach ?>
                    <?php endif ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End Table Product -->
    <br>
</div><!-- /.container -->
<?php include("inc/footer.php") ?>