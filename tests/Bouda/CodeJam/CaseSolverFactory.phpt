<?php

namespace BoudaTests;

use Bouda;
use Tester;
use Tester\Assert;

require_once __DIR__ . '/../../bootstrap.php';


$mockReader = new Bouda\CodeJam\Reader(Tester\FileMock::create(''));


$nonexistentCaseSolverClassName = 'Foooooo';

Assert::exception(function() use ($nonexistentCaseSolverClassName)
{
    new Bouda\CodeJam\CaseSolverFactorySimple($nonexistentCaseSolverClassName);
}, 'Exception', "Class '$nonexistentCaseSolverClassName' does not exist");


$classNameNotACaseSolver = '\stdClass';
$solverFactory = new Bouda\CodeJam\CaseSolverFactorySimple($classNameNotACaseSolver);

Assert::exception(function() use ($classNameNotACaseSolver, $solverFactory, $mockReader)
{
    $solverFactory->getSolver($mockReader);
}, 'Exception', "Class '$classNameNotACaseSolver' is not a CaseSolver");


$validCaseSolverClassName = 'Bouda\CodeJam\CaseSolverNaive';
$solverFactory = new Bouda\CodeJam\CaseSolverFactorySimple($validCaseSolverClassName);
Assert::type($validCaseSolverClassName, $solverFactory->getSolver($mockReader));
