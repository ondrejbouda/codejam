<?php

namespace BoudaTests;

use Bouda;
use Tester;
use Tester\Assert;

require_once __DIR__ . '/../../bootstrap.php';


$testString = 'WHATAVA!!';

$inputFile = Tester\FileMock::create($testString);

$reader = new Bouda\CodeJam\Reader($inputFile);

$testCase = new Bouda\CodeJam\CaseSolverNaive($reader);

Assert::equal($testString, $testCase->solve());
