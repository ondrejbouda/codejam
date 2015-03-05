<?php

namespace Bouda\CodeJam;


/**
 * Class Reader
 * @package Bouda\CodeJam
 */
class Reader
{
    /** @var resource */
    private $fileHandle;


    /**
     * @param string $filename
     */
    function __construct($filename)
    {
        $this->fileHandle = fopen($filename, 'r');
    }


    /**
     * Read one whole line from file. Return without ending newline.
     *
     * @return bool|string
     */
    public function readLine()
    {
        if ($line = trim(fgets($this->fileHandle)))
        {
            return $line;
        }

        return false;
    }

    /**
     * Read an array of integers from one line of file. Default delimiter is ' '.
     *
     * @return array
     */
    public function readArrayOfInteger()
    {
        return $this->arrayWalk($this->readArray(), function(&$value)
        {
            $value = (integer) $value;
        });
    }

    /**
     * Read an array of strings from one line of file. Default delimiter is ' '.
     *
     * @return array
     */
    public function readArrayOfString()
    {
        return $this->arrayWalk($this->readArray(), function(&$value)
        {
            $value = (string) $value;
        });
    }

    /**
     * array_walk without passing by reference.
     *
     * @param array
     * @param function
     * @return array
     */
    private function arrayWalk(array $array, $function)
    {
        array_walk($array, $function);

        return $array;
    }

    /**
     * Read an array from one line of file. Default delimiter is ' '.
     *
     * @param string $delimiter
     * @return array
     */
    public function readArray($delimiter = ' ')
    {
        $line = $this->readLine();

        return explode($delimiter, $line);
    }


    function close()
    {
        fclose($this->fileHandle);
    }
}
