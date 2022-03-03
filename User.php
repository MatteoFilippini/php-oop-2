<?php

require 'CreditCard.php';
class User
{
    public $f_name;
    public $l_name;
    public $age;
    public $carta;

    public function __construct($f_name, $l_name, $age, $carta)
    {
        $this->f_name = $f_name;
        $this->l_name = $l_name;
        $this->age = $age;
        $this->setCreditCard($carta);
    }

    public function setCreditCard($carta)
    {
        if (($carta instanceof CreditCard) === false) return false;
        $this->carta = $carta;
    }
}

$user = new User('Matteo', 'Filippini', 10, $credit_card);

var_dump($user);
