<?php

abstract class CommandExecutor
{

    abstract public function execute(CommandParser $parser);
}
