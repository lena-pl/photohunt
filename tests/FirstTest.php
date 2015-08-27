<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class FirstTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function test_displays_homepage()
    {
        $response = $this->call('GET', '/');

        var_dump($response->getContent());
    }
}
