<?php

class AuthByPassword implements AuthInterface
{

    public function check()
    {
        if (!isset($_POST['auth']['password']) || strlen($_POST['auth']['password']) == 0) {
            throw new Exception('Undefined Auth Password');
        }

        if ($_POST['auth']['password'] != 'mega_secret_passworx') {
            throw new Exception('Incorrect Password');
        }
    }

}
