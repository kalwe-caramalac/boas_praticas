<?

class DebitoConta {

    public function debitar($valor, $conta, $tipoConta) {

        if (tipoConta == TipoConta::CORRENTE) {
            // Debita conta corrente
            return $numeroTransacao;
        }

        if (tipoConta == TipoConta::POUPANCA) {
            // Valida aniversario da conta
            // Debita conta poupanca
            return $numeroTransacao;
        }

        // Qual eh o problema aqui??
        // Ok irei facilitar, e se agora o nosso banco tem o TipoConta::CONTA_INVESTIMENTO?
        // Bom vou adicionar outro if e ta legal neh?

    }
}
?>
