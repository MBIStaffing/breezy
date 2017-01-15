<?php

namespace Draugiem\BreezySync\Tests;


use Draugiem\BreezySync\Breezy;

abstract class TestBase extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        parent::setUp();

        if (!class_exists(Credentials::class)) {
            throw new \Exception('Test credentials are not set. Copy "tests/Credentials.php.dist" to "tests/Credentials.php and set needed values');
        }
    }

    /**
     * Retrieve a breezy instance that is singed in already
     * @return Breezy
     */
    protected function breezy()
    {
        $breezy = new Breezy;
        $breezy->singIn(Credentials::$email, Credentials::$password);
        return $breezy;
    }
}