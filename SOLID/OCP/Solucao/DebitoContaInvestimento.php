<?

class DebitoContaInvestimento extends DebitoConta {

    public function debitar($valor, $conta) {
        $conta->setSaldo -= $valor - ($valor * 0.02);
        $numeroTransacao = rand();

        return $numeroTransacao;
    }
}

?>
