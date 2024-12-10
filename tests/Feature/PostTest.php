<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->post('/post' , [
            'title' => 'test',
            'post' => 'test'
        ]);

        $this->assertDatabaseHas('posts' , [
            'title' => 'test',
            'post' => 'test'
        ]);
    }
}
