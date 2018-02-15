<?php

// Sabemos que o if vai comprar executar uma acao se $a for maior que $b,
// porem com conseguimos definir pra qual finalidade esta comparacao
// esta sendo feita, gerando uma blackbox, sendo necessario analisar o contexto
// que essa funcao esta sendo aplicada
function sample() {
    $a = 10;
    $b = 1;

    if ($a > $b) {
        // ...
    }
}

// Ao lermos a primeira linha de codigo ja sabemos qual a finalidade desta funcao
function validaTentativas() {
    // E de quebra ainda sabemos exatamente pra que serve cada paramentro
    $tentativasRealizadas = 7;
    $limiteDeTentativas = 3;

    if ($tentativasRealizadas > $limiteDeTentativas) {
        // ...
    }
}

?>
