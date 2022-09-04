<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MeuPrimeiroTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_routes()
    {
       $this->get('/')->assertStatus(200);

       $this->get('/login')->assertStatus(200);
       $this->get('/home')->assertRedirect('/login');
       $this->get('/config')->assertRedirect('/login');

       $this->get('/usuarios')->assertRedirect('/login');

       $this->get('/usuarios/create')->assertRedirect('/login');

       $this->get('usuarios/edit/1')->assertRedirect('/login');
    }
}
