<?php

namespace Bouda\CodeJam;


class DatasetSolver
{
    /** @var Reader */
    private $reader;

    /** @var CaseSolver */
    private $caseSolver;


    /**
     * @param string $dataset filename
     * @param CaseSolver $caseSolver
     */
    function __construct($dataset, CaseSolver $caseSolver)
    {
        $this->reader = new Reader($dataset);
        $this->caseSolver = $caseSolver;
    }

    /**
     * Solves the whole dataset to file.
     *
     * @param string $outputFile
     * @return void
     */
    public function solveToFile($outputFile)
    {
        $writer = new Writer($outputFile);

        $cases = $this->reader->readLine();

        for($i = 1; $i <= $cases; $i++)
        {
            $writer->writeLine("Case #$i: " . $this->caseSolver->solve($this->reader));
        }

        $writer->close();
    }
}
