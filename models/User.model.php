<?php
class User {
    private $name;
    private $email;
    private $password;
    private $status;
    private $role;
    private $createdAt;
    private $updatedAt;

    public function setName($name) {
        $this->name = $name;
    }

    public function setEmail($email) {
        $this -> email = $email;
    }

    public function setPassword($password) {
        $this -> password = $password;
    }

    public function setStatus($status) {
        $this -> status = $status;
    }

    public function setRole($role) {
        $this -> role = $role;
    }

    public function setCreatedAt($createdAt) {
        $this -> createdAt = $createdAt;
    }

    public function setUpdatedAt($updatedAt) {
        $this -> updatedAt = $updatedAt;
    }

    public function __construct() {
        $this -> setCreatedAt(date());
    }
}