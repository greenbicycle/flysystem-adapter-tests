<?php
/**
 * Created by PhpStorm.
 * User: jeff
 * Date: 3/20/18
 * Time: 1:03 PM
 */

class FilesystemTest extends \Tests\TestCase
{
    /** @test **/
    public function file_can_be_written()
    {
        $result = $this->filesystem->write(
            $this->testFilename,
            $this->sampleText
        );
        $this->assertTrue($result, "Filesystem couldn't be written to.");
    }

    /** @test **/
    public function file_can_be_found()
    {
        $result = $this->filesystem->has(
            $this->testFilename
        );
        $this->assertTrue($result, "File " . $this->testFilename . " could not be found.");
    }

    /** @test **/
    public function file_can_be_read()
    {
        $result = $this->filesystem->read(
            $this->testFilename
        );
        $this->assertTrue(is_string($result), "Filesystem couldn't be read.");
    }

    /** @test **/
    public function file_can_be_deleted()
    {
        $result = $this->filesystem->delete(
            $this->testFilename
        );
        $this->assertTrue($result, "Filesystem couldn't be deleted.");
    }
}