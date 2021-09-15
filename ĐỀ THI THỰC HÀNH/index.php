<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\Controllers;

$page = isset($_GET['page']) ? $_GET['page'] : "";

$productController = new Controllers\ProductController();

include "src/Views/layout/header.php";

switch ($page) {
    case "product-list":
        if(isset($_GET['search'])){
            $productController->search($_GET['search']);
        } else {
            $productController->index();
        }
        break;


    case "product-create":
        $productController->store();
        break;
    case "product-delete":
        $id = $_GET['id'];
        $productController->delete($id);
        break;
    case "product-update":
        $id = $_GET['id'];
        $productController->update($id);
        break;

}


include "src/Views/layout/footer.php";
