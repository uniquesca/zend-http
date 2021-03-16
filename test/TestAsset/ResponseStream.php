<?php

namespace ZendTest\Http\TestAsset;

class ResponseStream {

    /** @var string */
    private $tempFile;

    public function __construct($tempFile)
    {
        $this->tempFile = $tempFile;
    }

    public function __toString()
    {
        return $this->tempFile;
    }

}