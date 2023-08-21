<?php

namespace app\library;

use app\interfaces\PaymentInterface;

class PagseguroPayment implements PaymentInterface
{
    public function pay()
    {
        var_dump('pay with pagseguro');
    }
}
