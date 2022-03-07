<?php

require_once 'CreditCard.php';

class User
{
    private $f_name;
    private $l_name;
    private $age;
    private $carta;
    private $is_register;

    public function __construct($f_name, $l_name, $age, $carta, $is_register = false)
    {
        $this->f_name = $f_name;
        $this->l_name = $l_name;
        $this->age = $age;
        $this->setCreditCard($carta);
        $this->is_register = $is_register;
    }

    public function getCard()
    {
        return $this->carta;
    }

    public function getRegister()
    {
        return $this->is_register;
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





    public function buyProduct($cibo)
    {
        $prezzo_prodotto = $cibo->getPrice();

        // se la proprieta login e true ha 20% di sconto
        if ($this->getRegister()) {
            $discount = $prezzo_prodotto * 20 / 100;
            $prezzo_prodotto -= $discount;
        }
        // controllo saldo
        if ($this->carta->getBalance() > $prezzo_prodotto) {
            // controllo data scadenza carta
            if ($this->carta->getDate() >= 2022) {
                return 'Hai pagato ' . $prezzo_prodotto . ' euro' . ' per ' . $cibo->getName();
            } else {
                return 'Carta di credito scaduta';
            }
        } else {
            return 'Saldo non disponible';
        };
    }
}
