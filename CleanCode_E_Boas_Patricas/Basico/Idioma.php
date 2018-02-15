<?php

// Escrever um bom codigo eh definor um idioma padrao. Ingles ja eh o padrao das proprias linguagens,
// porem nao ha nada que nos obrigue a adota como padrao, porem se dominarmos o idioma, melhor.
// O portugues requer acentuacoes, isso pode gerar problemas de entendimento ja que podemos
// escrever nome de metodos ou variaveis com acentos. Alem de ficar meio estranho ler codigo
// em ingles e portugues ao mesmo tempo

abstract class Idioma {

    public function definirNome($nome) {
        // ...
        return $nome;
    }

}
?>
