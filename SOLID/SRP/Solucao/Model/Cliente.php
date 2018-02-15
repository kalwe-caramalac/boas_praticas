<?php

// Class entidade de cliente - responsavel por conter as props de cliente e seus metodos
class Cliente {

    public $clienteId;
    public $nome;
    public $email;
    public $cpf;
    public $dataCadastro;

    public function __get($prop) {
        return $this->$prop;
    }

    public function __set($prop, $val) {
        if ((property_exists($this, $prop)))
            $this->$prop = $val;
    }

    // Metodo responsavel por dizer se a classe esta valida
    // uma classe pode sim se validar, pois ela conhece sua regra de negocio para isto
    public function isValid() {
       return EmailServices::isValid($this->email) && CPFServices::isValid($this->cpf);
    }

}

?>
