<?php

require 'User.php';

class UserLogin extends User
{
    public $email;
    public $pass;
    public $sconto = 20;

    public function __construct($f_name, $l_name, $age, $email, $pass)
    {
        parent::__construct($f_name, $l_name, $age);
        $this->email = $email;
        $this->pass = $pass;
    }
}

$user1Login = new UserLogin('Matteo', 'Filippini', 10, 'email', 'pass');
var_dump($user1Login);
