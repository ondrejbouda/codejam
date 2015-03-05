<?php

namespace BoudaTests;

use Bouda;
use Tester\Assert;

require_once __DIR__ . '/../../bootstrap.php';


$reader = new Bouda\CodeJam\Reader('Reader.in');

Assert::equal('line1', $reader->readLine());
Assert::equal('line2', $reader->readLine());
Assert::equal(array(1, 2, 3), $reader->readArrayOfInteger());
Assert::equal(array('123', '123'), $reader->readArrayOfString());

$reader->close();
