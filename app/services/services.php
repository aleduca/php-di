<?php

use app\interfaces\EmailInterface;
use app\library\Email;

use function DI\autowire;

return [
    EmailInterface::class => autowire(Email::class),
];
