<?php

class Cliente {

    public $id;
    public $nome;
    public $email;
    public $cpf;
    public $dataCadastro;

    public function adicionarCliente(){

        if (!strpos('@',$this->email)) {
            return "Cliente com o e-mail invalido";
        }

        if (strlen($cpf)>11) {
            return "CPF invalido";
        }

        $clienteInsere = new PDO('mysql:dbname=clientes_db;host=localhost', 'root', '');

        $clienteInsere->prepare("
            INSERT INTO cliente (nome, email, cpf, data_cadastro)
            VALUES (:nome, :email, :cpf, :data_cadastro)
        ");

        $clienteInsere->execute([
            'nome' => $this->nome,
            'email' => $this->email,
            'cpf' => $this->cpf,
            'data_cadastro' => $this->dataCadastro
        ]);

        $to      = $this->email;
        $subject = 'SOLID';
        $message = 'Introducao aos principios SOLID';
        $headers = 'From: webmaster@example.com' . "\r\n" .
            'Reply-To: webmaster@example.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        mail($to, $subject, $message, $headers);
    }
}

?>
