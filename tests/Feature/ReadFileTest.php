<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Request;
use Tests\TestCase;

class ReadFileTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_read_file()
    {

        $response =  $this->get('/api/v1/readFile?url=auth.log');

        $response->assertStatus(200);
    }
}
