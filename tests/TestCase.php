<?php

namespace Tests;

use Laravel\BrowserKitTesting\TestCase as BaseTestCase;
abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public $baseUrl = 'httpr://127.0.0.1:8000';
}
