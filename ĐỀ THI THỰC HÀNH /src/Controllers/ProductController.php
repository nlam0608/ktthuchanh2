<?php
namespace App\Controllers;
use App\Models\ProductModel;

class ProductController extends BaseController
{
    protected $model;


    public function __construct(){
        $this->model = new ProductModel();
        parent::__construct($this->model);
    }


    public function index(){
        $products = parent::index();
        include "src/Views/Product/list.php";

    }

    public function store()
    {
        if($_SERVER["REQUEST_METHOD"] == "GET"){
            include "src/Views/Product/create.php";
        } else {
            $data = [
                "code" => $_POST["code"],
                "name" => $_POST["name"],
                "sectors" => $_POST["sectors"],
                "price" => $_POST["price"],
                "quantity" => $_POST["quantity"],
                "date" => $_POST["date"],
                "description" => $_POST["description"],

            ];
            $this->model->store($data);
            header("Location:index.php?page=product-list");
        }

    }

    public function delete($id) {
        $this->model->delete($id);
        header("Location:index.php?page=product-list");
    }

    public function update($id) {

        if($_SERVER["REQUEST_METHOD"] == "GET"){
            $book = $this->model->getById($id);
            include "src/Views/Product/update.php";
        } else {
            $data = [
                "product_code" => $_POST["product_code"],
                "name" => $_POST["name"],
                "sectors" => $_POST["sectors"],
                "price" => $_POST["price"],
                "quantity" => $_POST["quantity"],
                "date_created" => $_POST["date_created"],
                "description" => $_POST["description"],

            ];
            $this->model->update($id, $data);
            header("Location:index.php?page=product-list");
        }
    }


    public function search($keyword){
        $books = $this->model->search($keyword);
        include "src/Views/Product/list.php";
    }

}