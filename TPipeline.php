<?php

namespace PHPDesignPattern;

/**
 * Description of TPipeline
 *
 * @author rmp
 */
trait IPipeline {

    function pipe($in)
    {
        return null;
    }

    function __invoke($in)
    {
        return $this->pipe($in);
    }

}

?>
