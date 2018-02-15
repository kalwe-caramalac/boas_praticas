<?php

namespace SOLID\SRP\Validation;

class EmailValida {

    public static function isValid($email) {
        if (strpos('@', $this->email))
            return true;

        // return strpos('@', $this->email);
    }
}
?>