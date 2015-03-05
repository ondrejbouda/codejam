<?php

namespace Bouda\CodeJam;


class Writer
{
    /** @var resource */
    private $fileHandle;


    /**
     * @param string $filename
     */
    function __construct($filename)
    {
        $this->fileHandle = fopen($filename, 'w');
    }


    /**
     * Writes text and newline.
     *
     * @param string $text
     */
    public function writeLine($text)
    {
        $this->write($text);
        $this->newline();
    }

    /**
     * Writes newline.
     */
    public function newline()
    {
        $this->write(PHP_EOL);
    }

    /**
     * Writes text.
     *
     * @param string $text
     */
    public function write($text)
    {
        fputs($this->fileHandle, $text);
    }


    public function close()
    {
        fclose($this->fileHandle);
    }
}
