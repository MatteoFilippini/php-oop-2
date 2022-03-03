<?php

require_once 'CreditCard.php';
require_once 'Eat.php';
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

    public function getCard()
    {
        return $this->carta;
    }

    public function buyProduct($cosa)
    {
        if ($this->getCard()->balance > $cosa) {
            return 'puoi';
        } else {
            return 'NO';
        };
    }
}

$user = new User('Matteo', 'Filippin', 33, $credit_card);

echo $user->buyProduct($cibo->getPrice());
