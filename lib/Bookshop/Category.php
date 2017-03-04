<?php
namespace Bookshop;

class Category extends Entity {
    public $name;

    public function getName() : string {
        return $this->name;
    }

    public function __construct(int $id, string $name) {
        parent::__construct($id);
        $this->name = $name;
    }
}