<?php

class CreditCard
{
    private $num;
    private $cvc;
    private $s_date;
    private $balance;

    public function __construct($num, $cvc, $s_date, $balance)
    {
        $this->num = $num;
        $this->cvc = $cvc;
        $this->s_date = $s_date;
        $this->balance = $balance;
    }

    public function getDate()
    {
        return $this->s_date;
    }

    public function getBalance()
    {
        return ($this->balance);
    }
}
