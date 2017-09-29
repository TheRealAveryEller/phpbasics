<?php
class Task {
    // Properties
    protected $description; 
    protected $completed; 
    protected $id;

    // Setters
    public function setDescription(String $description){
        $this->description = $description;
    }
    public function setid(Int $id){
        $this->id = $id;
    }
    public function complete() {
        $this->completed = true;
    }
    
    // Getters
    public function id(){
        return $this->id;
    }
    public function description() {
        return $this->description;
    }
    public function completed() {
        return $this->completed;
    }

    // Working Functions    
    public function toString() {
        $string = "Task $this->id is '$this->description'. It is ";
        $string .= $this->completed ? 'completed.' : 'not completed.';
        return $string;
    }
}