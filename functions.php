<?php

/**
 * Die and dump
 *
 * @param [type] $var
 * @return void
 */
function dd($var)
{
    echo '<pre>';
    die(var_dump($var));
    echo '</pre>';
}

/**
 * Connect to DB
 *
 * @return PDO
 */
function connectToDB()
{
    try {
        return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', 'password');
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

/**
 * Fetch all tasks
 *
 * @param PDO $pdo
 * @return array
 */
function fetchAllTasks(PDO $pdo)
{
    $statement = $pdo->prepare('SELECT * FROM todos');

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}
