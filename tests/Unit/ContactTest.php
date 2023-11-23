<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ContactTest extends TestCase
{
    use RefreshDatabase;

    public function testTrueIsTrue()
    {
        $this->assertTrue(true);
    }

    public function testIndexMethodReturnsCorrectView()
    {
        $response = $this->get(route('contact.index'));
        $response->assertStatus(200);
        $response->assertViewIs('contact.index');
    }
}
