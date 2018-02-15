<?

// A classe DebitoConta esta fechada porem foi extendida...
class DebitoContaCorrente extends DebitoConta {

    // Implementacao da regra de negocio do metodo abstrato,
    // estamos mudando o comportamento da class DebitoConta, ou extendendo
    // para uma funcao espeficida.
    public function debitar(float $valor, Conta $conta) {
        $conta->_saldo -= $valor;
        $numeroTranssacao = rand();

        return $numeroTransacao;
    }
}

?>
