<?php

require_once __DIR__ . '/../Traits/Selfcleanable.php';

class Litterbox extends Product
{

    use Selfcleanable;

    protected $type;
    protected $sizes;
    protected $isCleanable;

    function __construct(string $name, string $price, string $image, Category $category, string $description, string $type, array $sizes, string $isCleanable)
    {
        parent::__construct($name, $price, $image, $category, $description, $category);
        $this->type = $type;
        $this->sizes = $sizes;
        $this->isCleanable = $isCleanable;

        $this->getSizes();
    }

    public function getType()
    {
        return $this->type;
    }

    public function getSizes()
    {
        if (count($this->sizes) == 3) {
            return implode(' x ', $this->sizes);
        }
    }

    public function setClean()
    {
        return $this->isCleanable;
    }
}
