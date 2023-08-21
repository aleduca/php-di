<?php

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

return [
    Environment::class => function () {
        $loader = new FilesystemLoader(dirname(__FILE__, 3) . '/app/views');

        return new Environment($loader);
    },
];
