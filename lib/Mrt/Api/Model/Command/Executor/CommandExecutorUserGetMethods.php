<?php

class CommandExecutorUserGetMethods extends CommandExecutor
{

    private $methods;

    public function execute(CommandParser $parser)
    {
        $methods=array_keys(Api::getInstanse()->getUser->getMethods());
    }

    public function getMethods()
    {
        return $this->methods;
    }

}
