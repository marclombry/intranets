<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App;

class HelpersTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testMyTest()
    {
    	$bien='bien';
        $this->assertEquals('bien',$bien);
    }

    public function testFatigue()
    {
    	$flights = App\Models\Flight::all();
    	$f = DB::table('flights')->get();
    	$one = $f->first();
    	$m = '...';
    	$this->assertEquals($one->origin,'Miam');
    	$this->assertContains('Miam',$one->origin);
    	$this->assertEquals(strlen($m),3);


    }

    public function testU()
    {

    	$new = DB::table('flights')->get();
    	
    	dd($new->map(function($index){
    		return $index;
    	}));
    	
    }
}
