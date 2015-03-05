<?php

namespace Bouda\CodeJam;


/**
 * Case solver base.
 */
abstract class CaseSolver
{
    /** @var Reader */
    protected $reader;


    function __construct(Reader $reader)
    {
        $this->reader = $reader;
    }


    /**
     * Must be overriden in implementation.
     *
     * @return string solution
     */
    public abstract function solve();
}
