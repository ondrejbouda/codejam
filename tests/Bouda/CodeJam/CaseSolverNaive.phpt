<?php

namespace BoudaTests;

use Bouda;
use Tester;
use Tester\Assert;

require_once __DIR__ . '/../../bootstrap.php';


$testString = 'WHATAVA!!';

$inputFile = Tester\FileMock::create($testString);

$reader = new Bouda\CodeJam\Reader($inputFile);

$caseSolver = new Bouda\CodeJam\CaseSolverNaive;

Assert::equal($testString, $caseSolver->solve($reader));
