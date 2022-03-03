<?php

require 'Product.php';

class Eat extends Product
{
    public $type_animal;
    public $s_date;

    public function __construct($nome, $prezzo, $type_animal, $s_date)
    {
        parent::__construct($nome, $prezzo);
        $this->type_animal = $type_animal;
        $this->s_date = $s_date;
    }
}

$cibo = new Eat('croccantini', 10, 'cani', '2023');
