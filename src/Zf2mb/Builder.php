<?php
namespace Zf2mb;

/**
 * Main module builder class.
 */
class Builder {

    /**
     *
     * @var FileWriter
     */
    protected $fileWriter;

    public function __construct(FileWriter $fileWriter) {
        $this->fileWriter = $fileWriter;
    }
}
