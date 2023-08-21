<?php

namespace app\library;

use app\interfaces\EmailInterface;

class Email implements EmailInterface
{
    public function send()
    {
        var_dump('send email');
    }
}
