<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RouteTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->get('/')->assertStatus(200);
        $this->get('login')->assertStatus(200);
        $this->get('register')->assertStatus(200);
        $this->post('register')->assertStatus(302);
        $this->post('logout')->assertStatus(302);
        $this->get('about')->assertStatus(200);
        $this->get('contact')->assertStatus(200);
        $this->get('category')->assertStatus(200);
        $this->get('cart')->assertStatus(200);
        $this->get('/admin/category')->assertStatus(403);
        $this->post('/admin/category')->assertStatus(403);
        $this->get('/admin/product')->assertStatus(403);
        $this->post('/admin/product')->assertStatus(403);








    }
}
