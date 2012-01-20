<?php

namespace pat\DesignPattern;

/**
 *
 * @author rmp
 */
interface IPipeline {
    public function pipe($in);
    public function __invoke($in);
}

?>
