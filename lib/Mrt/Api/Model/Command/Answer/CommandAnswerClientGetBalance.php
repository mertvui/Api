<?php

class CommandAnswerClientGetBalance extends CommandAnswer
{

    public function execute(CommandExecuter $executor)
    {
        return 'Balance = ' . $executor->getBalance();
    }

}
