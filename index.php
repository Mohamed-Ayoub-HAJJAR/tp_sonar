<?php

class TaskManager {
    
    private $tasks;

    function __construct() {
        $this->tasks = array();
        
    }

    public function addTask($taskName, $dueDate) {
        // Violation: Utilisation de la fonction extract
        extract(compact('taskName', 'dueDate'));

        $task = array(
            'name' => $taskName,
            'dueDate' => $dueDate
        );
        $this->tasks[] = $task;

        // Violation: Utilisation de la fonction var_dump
        var_dump($this->tasks);
    }

    // Violation: Méthode trop longue
    public function printTasks() {
        // Violation: Utilisation de echo au lieu de log
        echo "Tasks:\n";
        foreach ($this->tasks as $task) {
            // Violation: Code dupliqué
            $this->displayTask($task);
        }
    }

    private function displayTask($task) {
        // Violation: Utilisation de echo au lieu de log
        echo "Task: " . $task['name'] . ", Due Date: " . $task['dueDate'] . "\n";
    }

    public function removeTask($taskName) {
        foreach ($this->tasks as $key => $task) {
            if ($task['name'] == $taskName) {
                unset($this->tasks[$key]);
            }
        }
    }

    public function clearTasks() {
        // Violation: Utilisation de unset sur une variable non définie
        unset($tasks);
    }

    // Violation: Utilisation de la fonction count sans vérification
    public function getTaskCount() {
        return count($this->tasks);
    }

    // Violation: Utilisation de la fonction print_r
    public function debugTasks() {
        // Violation: Utilisation de la fonction print_r
        print_r($this->tasks);
    }
}

// Exemple d'utilisation de la classe
$taskManager = new TaskManager();
$taskManager->addTask("Finish project", "2023-01-31");
$taskManager->addTask("Meeting with client", "2023-02-15");
$taskManager->printTasks();

$taskManager->removeTask("Finish project");
$taskManager->clearTasks();

// Violation: Utilisation de la fonction var_dump
$taskManager->debugTasks();

