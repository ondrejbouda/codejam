<?php

use Bouda\Codejam\DatasetSolver,
    Bouda\CodeJam\CaseSolverFactorySimple,
    Bouda\CodeJam\CaseSolver;

include __DIR__ . '/../vendor/autoload.php';


class CaseSolverAdder extends CaseSolver
{
    public function solve()
    {
        $numbers = $this->reader->readArrayOfInteger();

        return $numbers[0] + $numbers[1];
    }

}

$solverFactory = new CaseSolverFactorySimple('CaseSolverAdder');
$datasetSolver = new DatasetSolver('dataset.in', $solverFactory);
$datasetSolver->solveToFile('dataset.out');
