<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            UPDATE PRODUCT
        </div>
        <div class="card-body">
            <form method="post">
                <div class="form-group">
                    <label for="product-code">Product Code</label>
                    <input type="text" class="form-control" id="product-code" name = "product-code" value = <?php echo $product['product_code'] ?> placeholder="Enter product code">
                </div>

                <div class="form-group">
                    <label for="product-name">Name</label>
                    <input type="text" class="form-control" id="product-name" name = "name" value = <?php echo $product['name'] ?> placeholder="Enter name">
                </div>

                <div class="form-group">
                    <label for="product-sectors">Sectors</label>
                    <input type="text" class="form-control" id="product-sectors" name = "sectors" value = <?php echo $product['sectors'] ?> placeholder="Enter sectors">
                </div>

                <div class="form-group">
                    <label for="product-price">Price</label>
                    <input type="text" class="form-control" id="product-price" name = "price" value = <?php echo $product['price'] ?> placeholder="Enter price">
                </div>

                <div class="form-group">
                    <label for="product-quantity">Quantity</label>
                    <input type="text" class="form-control" id="product-quantity" name="quantity" value = <?php echo $product['quantity'] ?> placeholder="Enter quantity">
                </div>

                <div class="form-group">
                    <label for="product-date_created">Category</label>
                    <input type="text" class="form-control" id="product-date_created" name="date_created" value = <?php echo $product['date_created'] ?> placeholder="Enter date_created">
                </div>

                <div class="form-group">
                    <label for="product-desc">Description</label>
                    <textarea type="text" class="form-control" id="product-desc" name="desc" placeholder="Enter desc"><?php echo $product['description'] ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="index.php?page=product-list" type="button" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>