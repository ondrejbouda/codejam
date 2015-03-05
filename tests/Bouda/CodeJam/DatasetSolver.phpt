<?php

namespace BoudaTests;

use Bouda;
use Tester;
use Tester\Assert;

require_once __DIR__ . '/../../bootstrap.php';

$inputFile = 'DatasetSolver.in';
$outputFile = Tester\FileMock::create('');
$outputFileExpected = 'DatasetSolver.out.expected';

$solver = new Bouda\CodeJam\DatasetSolver($inputFile, new Bouda\CodeJam\CaseSolverNaive);

$solver->solveToFile($outputFile);

Assert::matchFile($outputFileExpected, file_get_contents($outputFile));
