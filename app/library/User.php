<?php

namespace app\library;

class User
{
    public function __construct(
        private Email $email
    ) {
    }

    public function create()
    {
        var_dump($this->email);
    }
}
