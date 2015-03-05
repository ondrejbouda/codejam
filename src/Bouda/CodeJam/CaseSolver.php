<?php
/**
 * Created by PhpStorm.
 * User: ondrej
 * Date: 5. 3. 2015
 * Time: 2:03
 */

namespace Bouda\CodeJam;


/**
 * Case solver base.
 */
abstract class CaseSolver
{
    /** @var Reader */
    protected $reader;


    function __construct(Reader $reader)
    {
        $this->reader = $reader;
    }


    /**
     * Must be overriden in implementation.
     *
     * @return string solution
     */
    public function solve() {}
}