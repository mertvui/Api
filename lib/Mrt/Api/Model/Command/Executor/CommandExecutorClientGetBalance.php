<?php

class CommandExecutorClientGetBalance extends CommandExecutor
{

    private $balance;

    public function execute(CommandParser $parser)
    {
        $client = new CLient($parser->getId());
        $this->balance = $client->getBalance();
    }

    public function getBalance()
    {
        return $this->balance;
    }

}
