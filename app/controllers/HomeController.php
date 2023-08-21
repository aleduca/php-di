<?php

namespace app\controllers;

use app\database\model\User;
use app\interfaces\EmailInterface;
use app\interfaces\PaymentInterface;
use Twig\Environment;

class HomeController
{
    public function __construct(
        private Environment $twig,
        private EmailInterface $email,
        private PaymentInterface $payment
    ) {
    }
    public function index()
    {
        $user = new User;
        $user = $user->find('id', 5);

        $this->email->send();
        $this->payment->pay();

        echo $this->twig->render('home.php', ['user' => $user]);
    }
}
