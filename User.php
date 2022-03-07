<?php

require_once 'CreditCard.php';

class User
{
    private $f_name;
    private $l_name;
    private $age;
    private $carta;
    private $login;

    public function __construct($f_name, $l_name, $age, $carta, $login)
    {
        $this->f_name = $f_name;
        $this->l_name = $l_name;
        $this->age = $age;
        $this->login = $login;
        $this->setCreditCard($carta);
    }

    public function getCard()
    {
        return $this->carta;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function getName()
    {
        return $this->f_name;
    }

    private function setCreditCard($carta)
    {
        if (($carta instanceof CreditCard) === false) return false;
        $this->carta = $carta;
    }

    public function buyProduct($prezzo_prodotto, $nome_prodotto, $credit_date)
    {
        // se la proprieta login e true ha 20% di sconto
        if ($this->getLogin()) {
            $discount = $prezzo_prodotto * 20 / 100;
            $prezzo_prodotto -= $discount;
        }
        // controllo saldo
        if ($this->carta->getBalance() > $prezzo_prodotto) {
            // controllo data scadenza carta
            if ($this->carta->getDate() >= 2022) {
                return 'Hai pagato ' . $prezzo_prodotto . ' euro' . ' per ' . $nome_prodotto;
            } else {
                return 'Carta di credito scaduta';
            }
        } else {
            return 'Saldo non disponible';
        };
    }
}
