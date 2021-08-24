<?php

class Product
{
    private $sku;
    private $name;
    private $price;
    private $size;
    private $weight;
    private $height;
    private $width;
    private $length;

    public function __construct($data)
    {
        $this->sku = $data['sku'];
        $this->name = $data['name'];
        $this->price = $data['price'];
        $this->size = $data['size'] ?? NULL;
        $this->weight = $data['weight'] ?? NULL;
        $this->height = $data['height'] ?? NULL;
        $this->width = $data['width'] ?? NULL;
        $this->length = $data['length'] ?? NULL;
    }

    public static function all()
    {
        return DB::query("SELECT * FROM products");
    }

    public function add()
    {
        return DB::query("INSERT INTO products (sku, name, price, size, weight, height, width, length) VALUES (:sku, :name, :price, :size, :weight, :height, :width, :length)", [
            ':sku' => $this->sku,
            ':name' => $this->name,
            ':price' => $this->price,
            ':size' => $this->size,
            ':weight' => $this->weight,
            ':height' => $this->height,
            ':width' => $this->width,
            ':length' => $this->length,
        ]);
    }

    public static function delete($id)
    {
        return DB::query("DELETE FROM products WHERE id=:id", [':id' => $id]);
    }

    public static function get($id)
    {
        return DB::query("SELECT * FROM products WHERE id=:id", [':id' => $id]);
    }

}