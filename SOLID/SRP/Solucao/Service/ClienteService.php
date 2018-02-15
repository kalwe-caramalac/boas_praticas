<?

// Service e um padrao para os servicoes que uma classe tem 
// ou pode executar e que a classe Cliente nao conheca como sera feito, 
// ela apenas sabe que eh possivel, como isso acontece ela nao precisa saber
class ClienteService {

    // Este metodo conhece quem adiciona cliente, mas ele precisa saber como isso acontece
    public function adicionarCliente($cliente) {
        if (!cliente.isValid()) // 
            return "Dados invaldos";

        // Aqui deveriamos usar uma interface seguindo o ISP(Interface Segregation Principle)
        // adicionando um contrato evitando o forte acoplamento com a classe ClienteRepository,
        // porem este principio sera visto mais a frente se necesasrio.
        $clienteRepository = new ClienteRepository();
        $clienteRepository->adicionaCliente($cliente); // Este metodo conhece como insere um cliente
    }

    // Este metodo ainda contem um dependencia da classe EmailService,
    // que sera resolvida com o ISP
    public function contataCliente($email) {
        $emailService = new EmailService();
        $emailService->enviaEmail($email);
    }

}
?>