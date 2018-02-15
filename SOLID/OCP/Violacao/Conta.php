<?php

class Conta {

    public $numero;
    public $saldo;

    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($val) {
        $this->numero = $val;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function setSaldo($val) {
        $this->saldo = $val;
    }
}

?>
