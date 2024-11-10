<?php
/* Класс, использующий данный трейт, получает метод getInstance(), который возвращает
единственный экземпляр объекта данного класса */
namespace wfm;

trait TSingleton
{

    private static ?self $instance = null;

    private function __construct(){}

    public static function getInstance(): static
    {
        return static::$instance ?? static::$instance = new static();
    }

}
