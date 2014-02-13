<?php

class CommandExecutorClientIncBalance extends CommandExecutor
{

    private $balance;

    public function execute(CommandParser $parser)
    {
        $client = new CLient($parser->getId());
        $client->incBalance($parser->getVal());
        $client->save();
        $this->balance=$client->getBalance();
    }

    public function getBalance()
    {
        return $this->balance;
    }

}
