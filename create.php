<?php include("inc/header.php") ?>
    <div class="container">
        <a href="index.php" class="btn btn-light mb-3"><< Go Back</a>
        <?php if (isset($_GET['status']) && $_GET['status'] == "created") : ?>
        <div class="alert alert-success" role="alert">
            <strong>Created</strong>
        </div>
        <?php endif ?>
        <?php if (isset($_GET['status']) && $_GET['status'] == "fail_create") : ?>
        <div class="alert alert-danger" role="alert">
            <strong>Fail Create</strong>
        </div>
        <?php endif ?>
        <!-- Create Form -->
        <div class="card border-danger">
            <div class="card-header bg-danger text-white">
                <strong><i class="fa fa-plus"></i> Add New Product</strong>
                 <a href="index.php">Back</a>

            </div>
            <div class="card-body">
                <form action="add.php" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="barcode" class="col-form-label">Barcode</label>
                            <input type="text" class="form-control" id="barcode" name="barcode" placeholder="Barcode" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name" class="col-form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="price" class="col-form-label">Price</label>
                            <input type="number" class="form-control" id="price" name="price" placeholder="Price" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="qty" class="col-form-label">Qty</label>
                            <input type="number" class="form-control" name="qty" id="qty" placeholder="Qty" required>
                        </div>
                        <div class="form-group col-md-4">
               
<?php
$urls = '<input type="text" class="form-control" id="barcode" name="barcode" placeholder="Barcode" required>';
echo $urls;

  ?>
  <form>
  <input id="myURL" name="image" type="url" required>
<?php   $ve = "<button>Submit</button> "?>
</form>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="note" class="col-form-label">Description</label>
                        <textarea name="description" id="" rows="5" class="form-control" placeholder="Description"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i> Save</button>
                </form>
            </div>
        </div>
        <!-- End create form -->
        <br>
    </div><!-- /.container -->
<?php include("inc/footer.php") ?>