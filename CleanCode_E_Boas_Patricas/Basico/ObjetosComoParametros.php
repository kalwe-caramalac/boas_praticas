<?php

// Os argumentos influenciam muito na qualidade das nossas funções. Eles são a entrada principal das nossas funções e manter eles organizados é importante para deixar o comportamento das funções explícito

// Aqui encontramos uma funcao sobrecarrega de parametros...
function enviarEmailDeNotificacao5($id, $nome, $email, $dataDeNascimento, $mensagem) {
    // Logica que envia email...
}

// Porque nao encapsularmos os paramentros em uma classe?
class Pessoa {
    public $id;
    public $nome;
    public $email;
    public $dataDeNascimento;
}

$zeDaSilva = new Pessoa();
$mensagem = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";

function enviarEmailDeNotificacao2($zeDaSilva, $mensagem) {
    // Logica que envia email...
}

// Obs: O ideal seria nao exeder tres parametros por funcao, se isso esta acontecendo provavelmente
// perdemos uma boa oportunidade de abstracao.

?>
