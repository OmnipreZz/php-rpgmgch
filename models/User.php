<?php

class User {
    private static $count;
    private $id;
    private $email;
    private $createdAt;

    public function __construct($newMail) {
        self::$count++;
        $this->setId(self::$count);
        $this->email = $newMail;
        $this->createdAt = date('Y-m-d');
    }

    public function setId($n) {
        $n = (string)$n;
        $this->id = $n;
    }

    public function getId() {
        return $this->id;
    }

    public function getMail() {
        return $this->email;
    }

    public function getDate() {
        return $this->createdAt;
    }
}