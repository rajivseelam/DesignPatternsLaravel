<?php

namespace DesignPatterns\Facade;

/**
 * Bicycle is a bicycle
 */
class Os implements OsInterface
{
    /**
     * halt the OS
     */
    public function halt()
    {
        echo __METHOD__."  Halted!!<br />";

        return 'Halted!!';
    }

}