<?

class DebitoContaPoupanca extends DebitoConta {

    public function debitar($valor, $conta) {
        $conta->setSaldo -= $valor;
        $numeroTransacao = rand();

        return $numeroTransacao;
    }
}

?>
