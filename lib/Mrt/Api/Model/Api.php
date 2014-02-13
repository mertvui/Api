<?php

class Api
{

    const UNDEFINED_KEY = 'Undefined Key';    

    private static $instance = null;
    private $user;
    private $key;
    private $command;

    public static function getInstance()
    {
        if (null === self::$instance) {
            self::$instance = new self();
            self::$instance->user = self::$instance->setUser();
            self::$instance->command = self::$instance->setCommand();
        }
        return self::$instance;
    }

    public function run()
    {
        $this->command->execute();
    }

    public function getUser()
    {
        return $this->user;
    }

    public function getKey()
    {
        return $this->key;
    }

    private function setKey()
    {
        if (!isset($_POST['key']) || strlen($_POST['key']) <= 0) {
            throw new Exception(UNDEFINED_KEY);
        }

        $this->key = $_POST['key'];
    }

    private function setUser()
    {
        $this->user = new User($this);
    }

    private function setCommand()
    {      
        $this->command = new Command();
    }

    private function __clone()
    {
        
    }

    private function __construct()
    {
        
    }

}
