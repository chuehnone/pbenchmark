<?php

namespace Pbenchmark\Runners;

abstract class Runner
{
    /**
     * @var array
     */
    protected $models = [];

    /**
     * @return void
     */
    public function run(): void
    {
    }
}