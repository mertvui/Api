<?php

class CommandAnswerClientCreate extends CommandAnswer
{

    public function execute(CommandExecuter $executor)
    {
        return 'Client Create id='.$executor->getId();
    }

}
