<?php

class Cliente {

    public $id;
    public $nome;
    public $email;
    public $cpf;
    public $dataCadastro;

    // Motivo 1
    // Tem um metodo que valida e insere no database
    // Uma classe nao deve se adicionar ao banco
    public function adicionarCliente(){

        // Motivo 2
        // Valida o email
        if(!strpos('@',$this->email)){
            return "Cliente com o e-mail invalido";
        }

        // Motivo 3
        // Valida o cpf - se trocar a regra pra validar cpf?
        if (strlen($cpf)>11)
        {
            return "CPF invalido";
        }

        // Motivo 4
        // Conecta ao banco - e se eu trocar de banco de dados?
        $clienteInsere = new PDO('mysql:dbname=clientes_db;host=localhost', 'root', '');

        // Motivo 5 - se a minha tabela precisar mudar?
        $clienteInsere->prepare("
            INSERT INTO cliente (nome, email, cpf, data_cadastro)
            VALUES (:nome, :email, :cpf, :data_cadastro)
        ");

        // Motivo 6
        $clienteInsere->execute([
            'nome' => $this->nome,
            'email' => $this->email,
            'cpf' => $this->cpf,
            'data_cadastro' => $this->dataCadastro
        ]);

        // Motivo - 7
        // Conhece toda a regra de envio de email e efetua o envio
        $to      = $this->Email;
        $subject = 'SOLID';
        $message = 'Introducao aos principios SOLID';
        $headers = 'From: webmaster@example.com' . "\r\n" .
            'Reply-To: webmaster@example.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
        // Motivo - 8
        // E se eu precisar enviar um email para um vendedor,
        // vou replicar o codigo na class Vendedor?
        mail($to, $subject, $message, $headers);
    }
}

?>
