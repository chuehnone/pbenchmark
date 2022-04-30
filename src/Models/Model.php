<?php

namespace Pbenchmark\Models;

abstract class Model
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @return void
     */
    abstract public function handle(): void;

    /**
     * @return null|string
     */
    public function getName(): ?string
    {
        return $this->name;
    }
}