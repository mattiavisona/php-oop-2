<?php

trait Selfcleanable
{
    protected $self = '<i class="fa-solid fa-spray-can-sparkles"></i>';


    public function getClean($isCleanable)
    {
        if ($isCleanable == 'true') {
            return $this->self;
        }
        if ($isCleanable == 'false') {
            return '';
        } else {
            throw new Exception("Inserisci solo valori true o false");
        }
    }
}
