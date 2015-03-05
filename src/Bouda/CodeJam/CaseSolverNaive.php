<?php

namespace Bouda\CodeJam;


/**
 * Naïve case solver - returns the input.
 */
class CaseSolverNaive extends CaseSolver
{
    public function solve()
    {
        return $this->reader->readLine();
    }
}
