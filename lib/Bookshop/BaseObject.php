<?php
namespace Bookshop;

//Book Class
class BaseObject {


    public function __call(string $name, array $arguments)   //called when a method is called that doesn't exist (Magic Method)
    {
        throw new \Exception("Method " . $name . " is not declared");
    }

    public static function __callStatic(string $name, array $arguments)   //called when a static method is called that doesn't exist (Magic Method)
    {
        throw new \Exception("Static Method " . $name . " is not declared");
    }

    public function __set(string $name, $value)   //called when a method is called that doesn't exist (Magic Method)
    {
        throw new \Exception("Attribute " . $name . " is not declared and can't be set");
    }

    public function __get(string $name)   //called when a method is called that doesn't exist (Magic Method)
    {
        throw new \Exception("Attribute " . $name . " is not declared");
    }
}