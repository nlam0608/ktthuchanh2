<?php

namespace App\Models;

class ProductModel extends BaseModel
{
    protected $table = "products";

    public function __construct()
    {
        parent::__construct($this->table);
    }

    public function store($data)
    {
        $sql = "INSERT INTO `products`( `product_code`,`name`,`sectors`, `price`, `quantity`, `date_created`,`description`) 
        VALUES (?,?,?,?,?,?,?,)";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $data['product_code']);
        $stmt->bindParam(2, $data['name']);
        $stmt->bindParam(3, $data['sectors']);
        $stmt->bindParam(4, $data['price']);
        $stmt->bindParam(5, $data['quantity']);
        $stmt->bindParam(6, $data['date_created']);
        $stmt->bindParam(7, $data['description']);
        $stmt->execute();

    }


    public function update($id, $data)
    {
        $sql = "UPDATE `products` SET `product_code`=?,`name`=?,`sectors`=?,`price`=?,`quantity`=?,`date_created`=?,`description`=? WHERE id = $id";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $data['product_code']);
        $stmt->bindParam(2, $data['name']);
        $stmt->bindParam(3, $data['sectors']);
        $stmt->bindParam(4, $data['price']);
        $stmt->bindParam(5, $data['quantity']);
        $stmt->bindParam(6, $data['date_created']);
        $stmt->bindParam(7, $data['description']);
        $stmt->execute();
    }

}





