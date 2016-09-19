<?php

namespace project\Database;

/**
 * 
 */
interface DatabaseInterface
{
    /**
     *
     * @param type  $key
     * @param array $value
     */
    public function set($key, array $value);

    /**
     *
     * @param type $key
     */
    public function get($key);

    /**
     *
     * @param type $key
     * @param type $value
     */
    public function add($key, $value);
}
