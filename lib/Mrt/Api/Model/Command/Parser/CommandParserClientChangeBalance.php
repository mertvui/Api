<?php

class CommandParserClientChangeBalance extends CommandParser
{

    const INCORRECT_BALANCE_MODIFIER = 'Incorrect Balance Modifier';
    const INCORRECT_CLIENT_ID = 'Incorrect Client Id';

    private $id;
    private $val;

    public function execute()
    {
        $this->val = filter_var($_POST['params']['val'], FILTER_VALIDATE_FLOAT, array("options" => array('decimal' => '.')));
        if ($this->val <= 0) {
            throw new Exception(INCORRECT_BALANCE_MODIFIER);
        }

        $this->val = filter_var($_POST['params']['id'], FILTER_VALIDATE_INT);
        if ($this->val <= 0) {
            throw new Exception(INCORRECT_CLIENT_ID);
        }
    }

    public function getId()
    {
        return $this->id;
    }

    public function getVal()
    {
        return $this->val;
    }

}
