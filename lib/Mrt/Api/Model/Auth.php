<?php

class Auth implements AuthInterface
{

    private $auth;

    public function __construct()
    {
        $this->setAuth();
    }

    public function check()
    {
        $this->auth->check();
    }

    private function setAuth()
    {
        $auth = Api::getInstanse()->getUser()->getAuth();
        $this->auth = new $auth();
    }
}
