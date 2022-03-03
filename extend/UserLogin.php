<?php

require_once '../User.php';

class UserLogin extends User
{
    public $email;
    public $pass;
    public $sconto = 20;

    public function __construct($f_name, $l_name, $age, $credit_card, $email, $pass)
    {
        parent::__construct($f_name, $l_name, $age, $credit_card);
        $this->email = $email;
        $this->pass = $pass;
    }
}

$user_login = new UserLogin('Luca', 'Scandi', 40, 'email', 'pass', $credit_card_login);
var_dump($user_login);
