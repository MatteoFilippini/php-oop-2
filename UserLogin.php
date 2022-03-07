<?php

require_once 'User.php';
class UserLogin extends User
{
    private $email;
    private $pass;

    public function __construct($f_name, $l_name, $age, $credit_card, $email, $pass)
    {
        parent::__construct($f_name, $l_name, $age, $credit_card, true);
        $this->email = $email;
        $this->pass = $pass;
    }
}
