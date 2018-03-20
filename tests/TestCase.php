<?php

namespace Tests;

use PHPUnit\Framework\TestCase as BaseTestCase;
use Box\Auth\BoxJWTAuth;
use Box\BoxClient;
use Box\Config\BoxConstants;

/**
 * Class TestCase
 *
 * @package Tests
 */
abstract class TestCase extends BaseTestCase
{
    const TEST_FOLDER_NAME = 'TEST_FOLDER';

    protected $filesystem;
    protected $testFilename;
    protected $sampleText;

    public function setUp()
    {
        global $filesystem;

        parent::setUp();
        $this->filesystem = $filesystem;
        $this->testFilename = "test.txt";
        $this->sampleText = "Life is too important to be taken seriously.";
    }

    public function tearDown()
    {
        parent::tearDown();
    }

}