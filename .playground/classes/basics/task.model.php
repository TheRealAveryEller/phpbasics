<?php
class Task {
    protected $description; 
    protected $completed = false;        

    public function __construct ($description) {
        $this->description = $description;
    }

    public function isComplete() {
        return $this->completed;
    }

    public function complete() {
        $this->completed = true;
    }

    public function description() {
        return $this->description;
    }

    public function toString() {
        $string = "The task description is '$this->description', and is ";
        $string .= $this->completed ? 'completed.' : 'not completed.';
        return $string;
    }
}