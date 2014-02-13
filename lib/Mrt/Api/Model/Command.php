<?php

class Command implements CommandInterface
{

    const UNDEFINED_COMMAND = 'Undefined Command';
    const ILLEGAL_COMMAND = 'Illegal Command';
    const PARSER = 'CommandParser';
    const EXECUTOR = 'CommandExecutor';
    const ANSWER = 'CommandAnswer';

    private $command;
    private $parser;
    private $executor;
    private $answer;

    public function __construct()
    {
        $this->setCommand();
        $this->setHandler(PARSER);
        $this->setHandler(EXECUTOR);
        $this->setHandler(ANSWER);
    }

    public function execute()
    {        
        return $this->answer->execute(
               $this->executor->execute(
               $this->parser->execute()));
    }

    private function setCommand()
    {
        if (!isset($_POST['command']) || strlen($_POST['command']) <= 0) {
            throw new Exception(UNDEFINED_COMMAND);
        }

        if (!array_key_exists($_POST['command'], Api::getInstanse()->getUser()->getMethods())) {
            throw new Exception(ILLEGAL_COMMAND);
        }

        $this->command = $_POST['command'];
    }

    private function setHandler($type)
    {
        $methods = Api::getInstanse()->getUser()->getMethods();
        $handler = $type.$methods[$this->command][$type];
        $this->$type = new $class_name();
    }    
}
