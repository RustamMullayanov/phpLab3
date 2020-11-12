<?php


namespace App;


class MagicClass
{
    private $name;
    private $age;

    private function change_age(){
        $this->age += 1;
    }
    private static function do_something(){
        return NAN;
    }
    #Данный метод вызывается при создании нового экземпляра класса.
    public function __construct($Name, $Age){
        $this->name = $Name;
        $this->age = $Age;
        echo 'construct'.'<br/>';
    }
    #Данный метод вызывается при чтении данных из приватных или несуществующих свойств.
    public function __get($flag){
        echo 'get'.'<br/>';
    }
    #Данный метод вызывается при записи данных в приватные или несуществующие свойства.
    public function __set($name , $value){
        echo 'set'.'<br/>';
    }
    #Данный метод вызывается при попытке преобразовать объект класса в строку.
    public function __toString(){
        return 'toString'.'<br/>';
    }
    #Данный метод вызывается при вызове недоступных методов.
    public function __call($name , $arguments){
        echo 'call'.'<br/>';
    }
    #Данный метод вызывается при вызове недоступных статических методов.
    public static function __callStatic($name , $arguments){
        echo 'callStatic'.'<br/>';
    }
    #Данный метод вызывается при вызове isset() или empty()
    #на приватны или несуществующих свойствах.
    public function __isset($name){
        echo 'isset'.'<br/>';
    }
    #Данный метод вызывается при вызове unset() на приватны или несуществующих свойствах.
    public function __unset($name){
        echo 'unset'.'<br/>';
    }
    #Данный метод проверят наличие магического метода __sleep.
    public function __serialize(){
        echo 'serialize'.'<br/>';
    }
    #Данный метод вызывается при любой операции сериализации.
    public function __sleep(){
        echo 'sleep'.'<br/>';
    }
    #Данный метод проверят наличие магического метода __wakeup.
    public function __unserialize(){
        echo 'unserialize'.'<br/>';
    }
    #Данный метод восстанавливает любые ресурсы, которые может иметь объект.
    public function __wakeup(){
        echo 'wakeup'.'<br/>';
    }
    #Данный метод вызывается, когда скрипт пытается выполнить объект как функцию.
    public function __invoke(){
        echo 'invoke'.'<br/>';
    }
    #Данный метод вызывается при клонировании объекта,
    #другими словами, при приравнивании одного объекта класса другому.
    public function __clone(){
        echo 'clone'.'<br/>';
    }
    #Данный метод вызывается при освобождении всех ссылок
    #на определенный объект или при завершении скрипта.
    public function __destruct(){
        echo 'destruct'.'<br/>';
    }
}