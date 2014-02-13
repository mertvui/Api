<?php

class CommandAnswerClientDecBalance extends CommandAnswer
{

    public function execute(CommandExecuter $executor)
    {
        return 'Client id ='.$executor->getId().'<br /> Current DecBalance ='.$executor->getBalance();
    }

}
