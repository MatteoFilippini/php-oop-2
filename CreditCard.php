<?php

class CreditCard
{
    public $num;
    public $cvc;
    public $s_date;
    public $balance;

    public function __construct($num, $cvc, $s_date, $balance)
    {
        $this->num = $num;
        $this->cvc = $cvc;
        $this->s_date = $s_date;
        $this->balance = $balance;
    }
}

$credit_card = new CreditCard('432432423', '343', '24/04/2023', 1);
$credit_card_login = new CreditCard('9999999', '343', '24/04/2023', 100);
