<?php

require_once 'User.php';
class UserLogin extends User
{
    private $email;
    private $pass;
    private $discount;

    public function __construct($f_name, $l_name, $age, $credit_card, $email, $pass, $login)
    {
        parent::__construct($f_name, $l_name, $age, $credit_card, $login);
        $this->email = $email;
        $this->pass = $pass;
        $this->discount = 20;
    }

    public function getDiscout()
    {
        return $this->discout;
    }
}
