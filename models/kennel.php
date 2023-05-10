<?php

class Kennel extends Product
{
    protected $type;

    function __construct(string $name, string $price, string $image, Category $category, string $description, string $type)
    {
        parent::__construct($name, $price, $image, $category, $description, $category);
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }
}
