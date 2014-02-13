<?php

class AuthByRemoteAddr implements AuthInterface
{

    public function check()
    {
        if ($_SERVER['REMOTE_ADDR']!='127.0.0.1') {
            throw new Exception('Incorrect Remote Addr');
        }
    }

}
