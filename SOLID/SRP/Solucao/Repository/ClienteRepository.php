<?php

// Repository e um padrao
// Responsabilidade de conhecer* o banco e executar a acao
class ClienteRepository {

    // Este metodo ainda nao esta perfeito,
    // porem ja conseguimos isolar a conexao com database, do dominio da minha aplicacao
    public function adicionaCliente($cliente) {

        // Conecta ao banco - ainda nao eh o cenario perfeito, pois esta classe 
        // nao deveria conhecer o banco de dados, resolveremos isso mais tarde
        $db = new PDO('mysql:dbname=meu_db;host=localhost', 'root', '');

        $db->prepare("
            INSERT INTO cliente (nome, email, cpf, data_cadastro)
            VALUES (:nome, :email, :cpf, :data_cadastro)
        ");

        $db->execute([
            'nome' => $cliente->nome,
            'email' => $cliente->email,
            'cpf' => $cliente->cpf,
            'data_cadastro' => $cliente->dataCadastro
        ]);
    }

    public function listaCliente() {
        // codigo que lista um cliente...

        return $clientes; // array de clientes
    }

    public function deletaCliente($id) {
        // codigo que deleta um cliente...
    }
}
?>