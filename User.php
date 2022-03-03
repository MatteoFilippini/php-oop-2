<?php

require_once 'CreditCard.php';
class User
{
    public $f_name;
    public $l_name;
    public $age;
    public $credit_card;

    public function __construct($f_name, $l_name, $age)
    {
        $this->f_name = $f_name;
        $this->l_name = $l_name;
        $this->age = $age;
    }

    public function setCreditCard()
    {
    }
}

$user1 = new User('Matteo', 'Filippini', 10);

var_dump($user1);
