<?php
/**
 * Created by PhpStorm.
 * User: Thalon
 * Date: 04.03.2017
 * Time: 10:29
 */

namespace Bookshop;

interface IData {
    public function getId() : int;  //Interface das die Existenz der Method erzwingt
}

class Entity extends BaseObject implements IData {
    private $id;

    public function __construct(int $id){
        $this->id = $id;
    }

    public function getId() : int {
        return $this->id;
    }
}