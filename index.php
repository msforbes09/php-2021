<?php

require 'functions.php';
class Task
{
    public $description;

    public $completed = false;

    /**
     * Class constructor
     *
     * @param [type] $description
     */
    public function __construct($description)
    {
        $this->description = $description;
    }

    /**
     * Is task completed
     *
     * @return boolean
     */
    public function isCompleted()
    {
        return $this->completed;
    }

    /**
     * Complete task
     *
     * @return void
     */
    public function complete()
    {
        $this->completed = true;
    }
}

$tasks = [
    new Task('Go to store'),
    new Task('Learn PHP'),
    new Task('Finish tickets'),
];

$tasks[1]->complete();

// dd($tasks);

require 'index.view.php';
