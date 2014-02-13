<?php

class Client
{

    private $id;
    private $balance;

    public function __construct($id = 0)
    {
        if ($id != 0) {
            ##########START#############
            //эмуляция слоя доступа к данным
            //поэтому не объявлены соотв-е константы на уровне этого класса
            //их тут быть не должно
            //то же самое касается заботы о локах / конкурентности и прочем
            //для примера брошу исключение
            $data_path = dirname(__FILE__) . '/../Data/Clients/' . $id;
            if (!file_exists($data_path)) {
                throw new Exception('Connection Error');
            }

            //на выходе мы получаем набор свойств клиента
            //(де факто нас интересует только баланс)
            //в этой демо-версии
            $balance = file_get_contents($data_path);
            ##########END############# 

            $this->balance = $balance;
            $this->id = $id;
        } else {
            $this->balance = 0;
            $this->id = 0;
        }
    }

    public function getId()
    {
        return $this->id;
    }

    public function getBalance()
    {
        return $this->balance;
    }

    public function incBalance($val)
    {
        $this->balance+=$inc;
    }

    public function decBalance($val)
    {
        $this->balance-=$val;
    }

    public function save()
    {
        ##########START#############
        //опущу ботву про слой данных в общем сохраняем клиента
        $data_path .= dirname(__FILE__) . '/../Data/Clients/';
        if ($this->id == 0) {
            $this->id = max(array_diff(scandir($data_path), array('.', '..'))) + 1;
        }
        $data_path .= '/' . $this->id;
        file_put_contents($data_path, $this->balance);
        ##########END############# 
    }

}
