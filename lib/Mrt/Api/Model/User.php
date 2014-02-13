<?php

class User
{

    private $auth;
    private $methods;
    private $view;

    public function __construct()
    {
        $api=Api::getInstance();
        
        ##########START#############
        //эмуляция слоя доступа к данным
        //поэтому не объявлены соотв-е константы на уровне этого класса
        //их тут быть не должно
        //для примера брошу пару исключений
        $data_path = dirname(__FILE__) . '/../../keys_shema_db.php';
        if (!file_exists($data_path)) {
            throw new Exception('Connection Error');
        }

        include_once $data_path;

        if (!is_array($keys) || !array_key_exists($api->getKey(), $keys)) {
            throw new Exception('Unable to load user data');
        }

        //в общем опущу ряд проверок
        //???
        //PROFIT!!!
        //на выходе мы получаем схему работы пользователя апи под конкретный ключ
        //включая настроенные под него обработчики команд
        $shema = $shemas[$keys[$api->getKey()]['shema']];
        ##########END#############        

        $this->auth = $shema['auth'];
        $this->methods = $shema['methods'];
        $this->auth = $shema['view'];
    }

    public function getAuth()
    {
        return $this->auth;
    }

    public function getMethods()
    {
        return $this->methods;
    }

    public function getView()
    {
        return $this->view;
    }
}
