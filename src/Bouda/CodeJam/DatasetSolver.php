<?php

namespace Bouda\CodeJam;


class DatasetSolver
{
    /** @var Reader */
    private $reader;


    function __construct($dataset)
    {
        $this->reader = new Reader($dataset);
    }

    /**
     * Solves the whole dataset to file.
     *
     * @param string $outputFile
     */
    public function solveToFile($outputFile)
    {
        $writer = new Writer($outputFile);

        $cases = $this->reader->readLine();

        for($i = 1; $i <= $cases; $i++)
        {
            $testCase = new CaseSolverNaive($this->reader);
            $writer->writeLine("Case #$i: " . $testCase->solve());
        }

        $writer->close();
    }
}
