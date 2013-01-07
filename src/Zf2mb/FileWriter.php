<?php
namespace Zf2mb;

/**
 * Parses template files and writes the output to disk
 */
class FileWriter {

    /**
     *
     * @var Filesystem
     */
    protected $filesystem;

    /**
     * Constructor
     * @param Filesystem $filesystem
     */
    public function __construct(Filesystem $filesystem) {
        echo 'adasdas';
        exit;

        $this->filesystem = $filesystem;
    }


 }