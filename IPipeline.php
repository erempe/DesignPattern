<?php

namespace PHPDesignPattern;

/**
 *
 * @author rmp
 */
interface IPipeline {
    public function pipe($in);
    public function __invoke($in);
}

?>
