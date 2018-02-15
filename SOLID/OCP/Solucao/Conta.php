<?php

namespace SOLID\OCP\Solucao;

class Conta {

    public $numero;
    public $saldo;

    public function __get($prop) {
        return $this->$prop;
    }

    public function __set($prop, $val) {
        if ((property_exists($this, $prop)))
            $this->$prop = $val;
    }

}

?>
