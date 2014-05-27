<?php

namespace DesignPatterns\Facade;

/**
 * Bicycle is a bicycle
 */
class Bios implements BiosInterface
{
    /**
     * execute the BIOS
     */
    public function execute()
    {
        echo __METHOD__."  I Executed<br />";

        return 'I Executed';
    }

    /**
     * wait for halt
     */
    public function waitForKeyPress()
    {
        echo __METHOD__."  I am waiting<br />";

        return 'I am waiting';
    }

    /**
     * launches the OS
     *
     * @param OsInterface $os
     */
    public function launch(OsInterface $os)
    {
        echo __METHOD__."  I launched the OS<br />";

        return 'I launched the OS';
    }

    /**
     * power down BIOS
     */
    public function powerDown()
    {
        echo __METHOD__."  I powered down!<br />";

        return 'I powered down!';
    }

}