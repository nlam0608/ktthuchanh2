<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            ADD NEW PRODUCT
        </div>
        <div class="card-body">
            <form method="post">
                <div class="form-group">
                    <label for="product-product_code">product code</label>
                    <input type="text" class="form-control" id="product-product_code" name = "product_code" placeholder="Enter product_code">
                </div>

                <div class="form-group">
                    <label for="product-name">Name</label>
                    <input type="text" class="form-control" id="product-name" name = "name" placeholder="Enter name">
                </div>

                <div class="form-group">
                    <label for="product-sectors">Sectors</label>
                    <input type="text" class="form-control" id="product-sectors" name = "sectors" placeholder="Enter sectors">
                </div>

                <div class="form-group">
                    <label for="product-price">Price</label>
                    <input type="text" class="form-control" id="product-price" name = "price" placeholder="Enter price">
                </div>

                <div class="form-group">
                    <label for="product-quantity">Quantity</label>
                    <input type="text" class="form-control" id="product-quantity" name="quantity" placeholder="Enter quantity">
                </div>

                <div class="form-group">
                    <label for="product-date_created">Date created</label>
                    <input type="text" class="form-control" id="product-date_created" name="date_created" placeholder="Enter date_created">
                </div>

                <div class="form-group">
                    <label for="product-desc">Description</label>
                    <textarea type="text" class="form-control" id="product-desc" name="desc" placeholder="Enter desc"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="index.php?page=product-list" type="button" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>