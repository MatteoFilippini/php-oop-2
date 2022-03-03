<?php

class Product
{
    public $nome;
    public $prezzo;

    public function __construct($nome, $prezzo)
    {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
    }

    public function getPrice()
    {
        return $this->prezzo;
    }
}
