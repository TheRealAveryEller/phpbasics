<?php

class User {
    protected $first_name;
    protected $id;
    // public function __construct($firstName) {
    //     $this->firstName = $firstName;
    // }
    public function setFirstName($name) {
        $this->first_name = $name;
    }
    public function firstName() {
        return $this->first_name;
    }
}