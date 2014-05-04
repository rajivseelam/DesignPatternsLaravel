<?php

namespace DesignPatterns\Tests\Pool;

use DesignPatterns\Pool\Pool;

class TestWorker
{

    public $id = 1;

}

class PoolTest extends \PHPUnit_Framework_TestCase
{

    public function testPool()
    {
        $pool = new Pool('DesignPatterns\Tests\Pool\TestWorker');
        $worker = $pool->get();

        $this->assertEquals(1, $worker->id);

        $worker->id = 5;
        $pool->dispose($worker);

        $this->assertEquals(5, $pool->get()->id);
        $this->assertEquals(1, $pool->get()->id);
    }

}

