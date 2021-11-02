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
 * Check age
 *
 * @param integer $age
 * @return boolean
 */
function checkAge(int $age) : bool
{
    return $age >= 18;
}
