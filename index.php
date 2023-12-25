<?php

class TaskManager {
    
    private $tasks;

    function __construct() {
        $this->tasks = array();
    }

    // Violation: Méthode trop longue
    public function addTask($taskName, $dueDate) {
        $task = array(
            'name' => $taskName,
            'dueDate' => $dueDate
        );
        $this->tasks[] = $task;
    }

    // Violation: Code dupliqué
    public function printTasks() {
        foreach ($this->tasks as $task) {
            echo "Task: " . $task['name'] . ", Due Date: " . $task['dueDate'] . "\n";
        }
        // Violation: Utilisation de echo au lieu de log
        echo "Total tasks: " . count($this->tasks) . "\n";
    }

    // Violation: Déclaration de variable inutile
    public function getTaskCount() {
        $count = count($this->tasks);
        return $count;
    }

    // Violation: Utilisation de la fonction extract
    public function removeTask($taskName) {
        foreach ($this->tasks as $key => $task) {
            if ($task['name'] == $taskName) {
                unset($this->tasks[$key]);
            }
        }
    }

    // Violation: Utilisation d'une variable non initialisée
    public function clearTasks() {
        unset($this->tasks);
    }

}

// Exemple d'utilisation de la classe
$taskManager = new TaskManager();
$taskManager->addTask("Finish project", "2023-01-31");
$taskManager->addTask("Meeting with client", "2023-02-15");
$taskManager->printTasks();

// Violation: Utilisation de variable non déclarée
$taskCount = $taskManager->getTaskCount();
echo "Total tasks after adding: " . $taskCount . "\n";

$taskManager->removeTask("Finish project");
$taskManager->printTasks();

$taskManager->clearTasks();

// Violation: Utilisation de variable non initialisée
echo "Total tasks after clearing: " . $taskManager->getTaskCount() . "\n";

