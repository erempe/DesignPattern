<?php

namespace PHPDesignPattern;

/**
 * Description of TSingleton
 *
 * @author rmp
 */
trait TSingleton {
    public static function getInstance()
    {
        static $_instance = null;
        if ($_instance == null)
        {
            $_instance = new static();
        }
        
        return $_instance;
    }
}

?>