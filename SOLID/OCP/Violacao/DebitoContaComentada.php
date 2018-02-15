<?

class DebitoConta {

    public function debitar($valor, $conta, $tipoConta) {

        if (tipoConta == TipoConta::CORRENTE) {
            // Debita conta corrente
        }

        if (tipoConta == TipoConta::POUPANCA) {
            // Valida aniversario da conta
            // Debita conta poupanca
        }

        // Agora entra uma conta nova chamada 'Investimento' e fazemos um novo 'if', adicionamos
        // uma nova constante na class TipoConta. Mas oque ha de errado nisso??? O que que custa
        // por um 'if' a mais??? Custa que estamos dando um motivo para esta classe mudar,
        // uma classe apos ser definida/fechada nao deve sofrer alteracoes, apenas extensoes.
        // Outro if pode quebrar a classe inteira, nao so o novo tipo de conta, isso faria
        // parar todo a classe inteira e quebraria todos os tipos de conta que ja estao funcionando.
        // Cria um codigo mais 'testavel' pois toda vez que eu precisar testar esta classe, a cada
        // tipo de conta nova, eu teria que rescrever o teste que estava funcionando, ou seja, teriamos
        // um falso fail. Implementando com o princio OCP, apenas escreverias um novo teste unitario
        // para o novo tipo de conta testando apenas nova implementacao sem gerar efeitos colaterais.
    }
}
?>
