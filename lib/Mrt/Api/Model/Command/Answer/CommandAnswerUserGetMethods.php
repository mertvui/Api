<?php

class CommandAnswerUserGetMethods extends CommandAnswer
{

    public function execute(CommandExecutor $executor)
    {
        return '<pre>' . print_r($executor->getMethods(), TRUE) . '</pre>';
    }

}
