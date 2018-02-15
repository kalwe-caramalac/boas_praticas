<?php

// Na maioria das vezes um 'ELSE' nao tem a menor razao para existir
// apenas para 'engordar' codigo...
function eMaiorDeIdade($aluno) {
    if ($aluno->getIdade >= 18) {
        return true;
    } else {
        return false; // 4 linhas
    }
}

// Um else a menos ja ajuda neh?
function maiorDeIdade($aluno) {
    if ($aluno->getIdade >= 18)
        return true;

    return false; // 3 linhas
}

// Porem podemos melhor ainda mais esse metodo...
function maiorDeIdadeEnxuto($aluno) {
    return $aluno->getIdade() >= 18; // Pronto, com apenas uma linha e ate mesmo sem o if, temos o mesmo resultado
}

?>
