<?php

require 'Product.php';

class Eat extends Product
{
    private $type_animal;
    private $s_date;

    public function __construct($nome, $prezzo, $type_animal, $s_date)
    {
        parent::__construct($nome, $prezzo);
        $this->type_animal = $type_animal;
        $this->s_date = $s_date;
    }
}
