<?php

// Indentar/Endentacao o código eh tão importante para compreensão que algumas linguagens(python)
// obrigam a endentacao. Mas a questão que eu gostaria de apresentar eh que blocos de instrucao
// 'if', 'else', 'while', etc... Devem conter o mínimo possível de linhas de código,
// o ideal seria apenas a chamada de funções totalmente responsáveis fazendo link com o SRP do SOLID

// Lembrando! Uma função deve fazer apenas uma coisa e fazer bem feito.

function cadastrarFuncionario($funcionario) {
    if ($funcionario->getEmail() != null && !empty(trim($funcionario->getEmail()))) {

        if ($funcionarioRepository->inserir($funcionario)) {

                if ($enviarEmail->emailDeBoasVindas($funcionario->getEmail)) {
                    // ..
                }else{

                    error_log("Erro ao enviar as boas vindas para: " + $funcionario->getId());


                }
        } else {

            error_log("Erro ao tentar cadastrar o funcionario: " + $funcionario->getId());
        }



    }
}

// A função continua com inumeros problemas que serão corrigidos mais tarde...
// Porem a questao da organização ja melhorou consideravelmente.
function cadastrarFuncionarioIdentado($funcionario) {
    // Aqui temos um aninhamento de 'ifs' gerando uma grande profundidade
    if ($funcionario->getEmail() != null && !empty(trim($funcionario->getEmail()))) {
        if ($funcionarioRepository->inserir($funcionario)) {
            if ($enviarEmail->emailDeBoasVindas($funcionario->getEmail)) {
                // ...
            }else{
                error_log("Erro ao enviar as boas vindas para: " + $funcionario->getId());
            }
        } else {
            error_log("erro ao tentar cadastrar o funcionario: " + $funcionario->getId());
        }
    }
}

// Aqui iremos apenas isolar as resonsabilidades,
// porem qual é mais fácil e rapido de entender?
function cadastrarFuncionarioCorrecao($funcionario) {
    try {
        $funcionarioRepository->inserir($funcionario);
        $enviarEmail->emailDeBoas($funcionario->getEmail);
    } catch(Exception $e) {
        error_log($e->getMessage());
    }
}

?>
