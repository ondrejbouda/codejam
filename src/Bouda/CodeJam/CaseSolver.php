<?php

namespace Bouda\CodeJam;


/**
 * Case solver base.
 */
abstract class CaseSolver
{
    /**
     * Must be overriden in implementation.
     *
     * @param Reader $reader
     * @return string solution
     */
    public abstract function solve(Reader $reader);
}
