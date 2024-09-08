<?php
class Computer {
    private $type;
    private $model;
    private $storage;
    private $memory;
    private $processor;
    private $description;

    public function __construct() {}

    public function setType($type) {
        $this->type = $type;
    }

    public function setModel($model) {
        $this->model = $model;
    }

    public function setStorage($storage) {
        $this->storage = $storage;
    }

    public function setMemory($memory) {
        $this->memory = $memory;
    }

    public function setProcessor($processor) {
        $this->processor = $processor;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getType() {
        return $this->type;
    }

    public function getModel() {
        return $this->model;
    }

    public function getStorage() {
        return $this->storage;
    }

    public function getMemory() {
        return $this->memory;
    }

    public function getProcessor() {
        return $this->processor;
    }

    public function getDescription($description){
        return $this->description;
    }
}