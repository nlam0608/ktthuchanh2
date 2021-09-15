

<div class="container mt-5">
    <div class="card" >
        <div class="card-header">
            Product list
        </div>
        <div class="card-body">
            <a href="index.php?page=product-create" type="button" class="btn btn-primary mb-3">Add New Product</a>


            <table class="table">
                <thead>

                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Product Code</th>
                    <th scope="col">Name</th>
                    <th scope="col">Sectors</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Date_created</th>
                    <th scope="col">Description</th>
                    <th scope="col" colspan="2">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($producrs as $product): ?>
                    <tr>
                        <th><?php echo $product['id'] ?></th>
                        <td><?php echo $product['product_code'] ?></td>
                        <td><?php echo $product['name'] ?></td>
                        <td><?php echo $product['sectors'] ?></td>
                        <td><?php echo $product['price'] ?></td>
                        <td><?php echo $product['quantity'] ?></td>
                        <td><?php echo $product['date_created'] ?></td>
                        <td><?php echo $product['description'] ?></td>
                        <td><a href="index.php?page=product-update&id=<?php echo $product['id']?>" type="button" class="btn btn-warning">Edit</a></td>
                        <td><a onclick="return confirm('Ban chac muon xoa ?')" href="index.php?page=product-delete&id=<?php echo $product['id']?>" type="button" class="btn btn-danger">Delete</a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>      