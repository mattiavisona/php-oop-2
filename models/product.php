<?php

require_once __DIR__ . '/Category.php';


class Product
{
    protected $name;
    protected $price;
    protected $image;
    protected $category;
    protected $description;

    function __construct(string $name, string $price, string $image, Category $category, string $description)
    {
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
        $this->category = $category;
        $this->description = $description;
    }


    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function getDescription()
    {
        return $this->description;
    }
}
