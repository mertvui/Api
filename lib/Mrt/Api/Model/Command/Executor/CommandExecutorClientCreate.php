<?php

class CommandExecutorClientCreate extends CommandExecutor
{

    private $id;

    public function execute(CommandParser $parser)
    {
        $client = new CLient();
        $client->save();
        $this->id=$client->getId();
    }

    public function getId()
    {
        return $this->id;
    }

}
