<?php

// Polemicos!!!
// Eu particularmente acretito que por mais bem escrito que um c�digo esteja,
// ler uma PEQUENA frase sempre ser� mais r�pido que passar os olhos por algumas vari�veis e metodos
// pra descobrir o que aquilo faz.

// Por�m na maioria das vezes coment�rios grandes e mau escritos s�o a tentativa de compensar o nosso
// fracasso em escrever em c�digo coesso e de qualidade, em muitos casos um nome de funcao bem definido
// ja evitaria um comentario...

// ATENCAO - Comentarios antigos ou desatualizados podem confundir ainda mais.
// sempre que encontrar um comentario defasado, atualize!!!

/**
 * Caso o funcion�rio tenha mais de 60 anos, tenha um sal�rio inferior a R$ 3000,00
 * e caso ele tenha filhos, o mesmo est� eleg�vel a receber um b�nus
 */
if($funcionario->getIdade > 60 && $funcionario->getSalario < 3000 && $funcionario->temFilhos()) {
    // ... Comun isso neh?
}

// Porque nao escolhemos uma das opcoes abaixo, sao mais legiveis e responsaveis.
if($funcionario->estaElegivelParaOBonus()) { }

if($funcionario->eBonificavel()) { }

if($funcionario->podeReceberBonus()) { }

// A ideia nao � sair por ai apagando todos os comentarios(nao facam isso por favor!)
// e sim termos a ideia que com um pouco de atencao e responsabilidade podemos tornar as coisas
// bem mais faceis e assim teremos um codigo mais (legal, mentira) legivel e mais facil de manter.
//  Poupando os comentarios apenas pra situacoes indispensaveis.

// Outra coisa bastante desnecessaria sao comentarios do tipo...

/**
 * VSCode 3.15.16
 * Criado em 06/06/2016
 * Por: Seiya
 * Classe de Funcionario (cara eu sei ja escrito ali embaxio ;P)
 */
class Funcionario {

    // Armazena o nome do usu�rio
    public $nome;

    // Armazena a idade do usu�rio
    public $idade;

    // Armazena o e-mail do usu�rio
    public $email;
    // Praque isso meu jovem? Uma variavel chamada 'nome' dentro de uma classe funcionario
    // ja nao e explicativo o bastante??? =(

    /**
     * Construtor da classe (serio?)
     */
    function __construct() { }

    /**
     * Funcoes get`s e set`s que retorna ou seta (grhhh)
     * um valor em cada atributo da classe respectivamente.
     */
    public function __set($prop, $val) {
        // ...
    }

    /**
     * Retorna o valor de uma propriedade da classe
     * @return $prop
     */
    public function __get($prop) {
        // ...
    }
}

// Olha so como a class esta magrinha agora xD
class Funcionario {

    public $nome;
    public $idade;
    public $email;

    function __construct() { }

    public function __set($prop, $val) {
        // ...
    }

    public function __get($prop) {
        // ...
    }
}

// DICAS PARA ESCREVERMOS UM BOM COMENTARIO
// 1 - Selecione com cuidado as suas palavras
// 2 - Nao, eu disse nao diga o obvio
// 3 - Seja o mais breve e direto possivel (muitas vezes algumas palavras sara o bastante)

?>
