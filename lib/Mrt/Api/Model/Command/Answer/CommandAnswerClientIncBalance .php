<?php

class CommandAnswerClientIncBalance extends CommandAnswer
{

    public function execute(CommandExecuter $executor)
    {
        return 'Client id ='.$executor->getId().'<br /> Current IncBalance ='.$executor->getBalance();
    }

}
