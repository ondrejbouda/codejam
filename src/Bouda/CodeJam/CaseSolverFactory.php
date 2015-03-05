<?php

namespace Bouda\CodeJam;


interface CaseSolverFactory
{
    function getSolver(Reader $reader);
}
