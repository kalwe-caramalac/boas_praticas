<?php

namespace SOLID\SRP\Validation;

// Foi transferido o conhecimento de como se valida um cpf para uma classe espeficica
class CPFValida {

    // Metodo com apenas uma responsabilidade
    public static function isValid($cpf) {
        if (strlen($cpf_cli) == 11)
            return 1;

        // return (strlen($cpf_cli) == 11);
    }
}
?>
