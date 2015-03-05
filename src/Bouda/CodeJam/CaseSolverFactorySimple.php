<?php

namespace Bouda\CodeJam;


class CaseSolverFactorySimple implements CaseSolverFactory
{
    /** @var string */
    private $caseSolverClassName;


    function __construct($caseSolverClassName)
    {
        if (!class_exists($caseSolverClassName))
        {
            throw new \Exception("Class '$caseSolverClassName' does not exist");
        }

        $this->caseSolverClassName = $caseSolverClassName;
    }


    public function getSolver(Reader $reader)
    {
        $solver = new $this->caseSolverClassName($reader);

        if (!($solver instanceof CaseSolver))
        {
            throw new \Exception("Class '$this->caseSolverClassName' is not a CaseSolver");
        }

        return $solver;
    }
}
