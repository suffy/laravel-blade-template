<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloTest extends TestCase
{
    public function testHello(){
        $this->get('/hello')
            ->assertSeeText("suffy");
    }

    public function testHelloWorld(){
        $this->get('/world')
            ->assertSeeText("suffy");
    }

    public function testHelloView(){
        $this->view('hello', ["name"=>"suffy"])
            ->assertSeeText("suffy");
    }

    public function testHelloWorldView(){
        $this->view('hello.world', ["name"=>"suffy"])
            ->assertSeeText("suffy");
    }
}
