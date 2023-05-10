<?php

class Category
{
    protected $category;

    function __construct(string $category)
    {
        $this->category = $category;

        $this->getIcon();
    }

    // metodo per sostituire l'icona alla categoria
    public function getIcon()
    {
        if ($this->category == 'Cat') {
            $this->category = '<i class="fa-solid fa-cat"></i>';
        }
        if ($this->category == 'Dog') {
            $this->category = '<i class="fa-solid fa-dog"></i>';
        }

        if ($this->category == 'Gift') {
            $this->category = '<i class="fa-solid fa-gift"></i>';
        }

        return $this->category;
    }
}
