<?

// A classe diz oque tem que ser feito, mas nao como deve ser feito
// alem de estar fechada, nao sera modificada a cada novo tipo de conta
abstract class DebitoConta {

    public $numeroTransacao;

    // Ao herdarmos a classe 'DebitoConta' seremos obrigados a
    // definir ou criar a implementacao deste metodo.
    abstract public function debitar($valor, $conta);
}

// Porque nao usamos uma interface?
// Justamente para podermos fazer o override do metodo, por isso o metodo eh abstrato
?>
