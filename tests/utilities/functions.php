<?php

/**
 * Create a a database entry using a model factory
 *
 * @param       $class
 * @param array $states
 * @param array $attributes
 * @param null  $times
 * @return mixed
 */
function create($class, $states = [], $attributes = [], $times = null)
{
    return factory($class, $times)->states($states)->create($attributes);
}

/**
 * Make an object using a model factory
 *
 * @param       $class
 * @param       $states
 * @param array $attributes
 * @param null  $times
 * @return mixed
 */
function make($class, $states = [], $attributes = [], $times = null)
{
    return factory($class, $times)->states($states)->make($attributes);
}