<?php

abstract class CommandAnswer
{

    abstract public function execute(CommandExecutor $executor);
}
