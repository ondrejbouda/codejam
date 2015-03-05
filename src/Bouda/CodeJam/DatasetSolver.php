<?php

namespace Bouda\CodeJam;


class DatasetSolver
{
    /** @var Reader */
    private $reader;

    /** @var caseSolverFactory */
    private $caseSolverFactory;

    function __construct($dataset, $caseSolverFactory)
    {
        $this->reader = new Reader($dataset);
        $this->caseSolverFactory = $caseSolverFactory;
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
            $caseSolver = $this->caseSolverFactory->getSolver($this->reader);
            $writer->writeLine("Case #$i: " . $caseSolver->solve());
        }

        $writer->close();
    }
}
