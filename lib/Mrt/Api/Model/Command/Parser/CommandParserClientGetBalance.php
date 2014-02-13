<?php

class CommandParserClientGetBalance extends CommandParser
{

    const INCORRECT_CLIENT_ID = 'Incorrect Client Id';

    private $id;

    public function execute()
    {
        $this->val = filter_var($_POST['params']['id'], FILTER_VALIDATE_INT);
        if ($this->val <= 0) {
            throw new Exception(INCORRECT_CLIENT_ID);
        }
    }

    public function getId()
    {
        return $this->id;
    }

}
