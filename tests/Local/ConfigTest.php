<?php
/**
 * Created by PhpStorm.
 * User: jeff
 * Date: 3/20/18
 * Time: 1:03 PM
 */

class ConfigTest extends \Tests\TestCase
{

    /** @test **/
    public function local_path_is_set()
    {
        $this->assertTrue(
            is_string(getenv("LOCAL_PATH"))
        );
    }
}
