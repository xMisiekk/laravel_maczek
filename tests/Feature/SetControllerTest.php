<?php

namespace Tests\Feature;

use App\Models\Dish;
use App\Models\Set;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Response;
use Tests\TestCase;

class SetControllerTest extends TestCase
{   public function test_createSet()
    {    $request = [
        'name'=>'superchesse',
        'price_gross'=>40,
        'dishes'=>Dish::inRandomOrder()->limit(3)->get()->pluck("id")->toArray()
    ];
        $this->json('post', 'api/sets/create',$request)
            ->assertStatus(Response::HTTP_OK);
    }

    public function test_updateSet()
    {   $request = [
        'name'=>'mchotdog',
        'price_gross'=>30,
        'dishes'=>Dish::inRandomOrder()->limit(3)->get()->pluck("id")->toArray()];
       // dd($request);
        $this->json('post', 'api/sets/' . Set::inRandomOrder()->first()->id . '/update',$request)
            ->assertStatus(Response::HTTP_OK);
    }
    public function test_deleteSet()
    {
        $this->json('post', 'api/sets/' . Set::inRandomOrder()->first()->id . '/delete')
            ->assertStatus(Response::HTTP_OK);
    }

    public function test_getSets()
    {
        $this->json('post', 'api/sets/')
            ->assertStatus(Response::HTTP_OK);
    }

    public function test_getSet()
    {
        $this->json('post', 'api/sets/' . Set::inRandomOrder()->first()->id)
            ->assertStatus(Response::HTTP_OK);
    }

}
