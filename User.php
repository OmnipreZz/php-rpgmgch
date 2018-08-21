<?php

class User {
    private $id;
    private $email;
    private $createAt;

    public function __construct($newUser, $newMail) {
        $this->id = $newUser;
        $this->email = $newMail;
        $this->createAt = date('d-m-y H:i:s');
    }

    public function getId() {
        return $this->id;
    }

    public function getMail() {
        return $this->email;
    }

    public function getDate() {
        return $this->createAt;
    }
}