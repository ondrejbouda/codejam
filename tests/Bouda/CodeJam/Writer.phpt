<?php

namespace BoudaTests;

use Bouda;
use Tester;
use Tester\Assert;

require_once __DIR__ . '/../../bootstrap.php';


$outputFile = Tester\FileMock::create('');
$outputFileExpected = 'Writer.out.expected';

$writer = new Bouda\CodeJam\Writer($outputFile);

$writer->writeLine('line 1');
$writer->write('part1 ');
$writer->write('part2 ');
$writer->newline();
$writer->writeLine('line 3');

$writer->close();

Assert::matchFile($outputFileExpected, file_get_contents($outputFile));
