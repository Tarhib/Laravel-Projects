<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
//use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->withoutMiddleware();
        $this->visit('artist')             
              ->type('azad', 'artistName')
              ->type('USA', 'countryName')
              ->press('Upload')
              // ->see('Albums');
        // ->see('expand');
              ->seePageIs('artist');


    }

   


}
