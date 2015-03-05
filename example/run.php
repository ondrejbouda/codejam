<?php

use Bouda\Codejam\DatasetSolver,
    Bouda\CodeJam\CaseSolverFactorySimple,
    Bouda\CodeJam\CaseSolver;

include __DIR__ . '/../vendor/autoload.php';


class CaseSolverAdder extends CaseSolver
{
    public function solve(Bouda\CodeJam\Reader $reader)
    {
        $numbers = $reader->readArrayOfInteger();

        return $numbers[0] + $numbers[1];
    }

}

$datasetSolver = new DatasetSolver('dataset.in', new CaseSolverAdder());
$datasetSolver->solveToFile('dataset.out');
