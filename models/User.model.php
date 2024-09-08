<?php
class User {
    private $name;
    private $email;
    private $password;
    private $status;
    private $role;
    private $createdAt;
    private $updatedAt;

    public function __construct() {
        $this -> setCreatedAt(date());
    }

    public function printUser() {
        $userInfo = $this->getName . " (" . $this->getEmail . ")";
        return $userInfo;
    }
    public function hasAccess($role) {
        return $this.getRole == $role;
    }

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

    public function getName($name) {
        return $this->name;
    }

    public function getEmail($email) {
        return $this -> email;
    }

    public function getPassword($password) {
        return $this -> password;
    }

    public function getStatus($status) {
        return $this -> status;
    }

    public function getRole($role) {
        return $this -> role;
    }

    public function getCreatedAt($createdAt) {
        return $this -> createdAt;
    }

    public function getUpdatedAt($updatedAt) {
        return $this -> updatedAt;
    }
}