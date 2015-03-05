<?php

namespace Bouda\CodeJam;


/**
 * Naïve case solver - returns the input.
 */
class CaseSolverNaive extends CaseSolver
{
    public function solve(Reader $reader)
    {
        return $reader->readLine();
    }
}
