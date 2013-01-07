<?php
use \Mockery;
use \Zf2mb;

class FileWriterTest extends PHPUnit_Framework_TestCase {

    protected $fileWriter;

    protected $filesystem;

    public function setUp() {

        $this->filesystem = Mockery::mock('Filesystem');

        $this->fileWriter = new Zf2mb\FileWriter($this->filesystem);
    }

    public function testWriter() {
        $this->filesystem->expects('file_put_contents')->once()->with('this');

        $this->fileWriter->write('this');
    }

}
