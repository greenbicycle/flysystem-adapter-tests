<?php
/**
 * Created by PhpStorm.
 * User: jeff
 * Date: 3/20/18
 * Time: 1:03 PM
 */

class AWS_S3_V3_ConfigTest extends \Tests\TestCase
{

    /** @test **/
    public function access_key_is_set()
    {
        $this->assertTrue(
            is_string(getenv("AWS_S3V3_ACCESS_KEY"))
        );
    }
    /** @test **/
    public function secret_key_is_set()
    {
        $this->assertTrue(
            is_string(getenv("AWS_S3V3_SECRET_KEY"))
        );
    }

}