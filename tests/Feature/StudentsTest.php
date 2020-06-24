<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StudentsTest extends TestCase
{
    // use DatabaseMigrations;
    use RefreshDatabase, WithFaker;

    /** @test */
    public function get_all_students()
    {
        $student = factory('App\Student',10)->create();
        $response = $this->get('/student');
        $response->assertStatus(200);
    }
    // /** @test */
    public function show_student(){

        $student = factory('App\Student')->create();
        $response = $this->get('/student/'.$student->id);
        $response->assertSee($student->last_name);
        $response->assertStatus(200);

    }
    /** @test */
    public function edit_student(){

      $student =  factory('App\Student')->create([
            'last_name' => 'Starichenko',
            'first_name' => 'Andrei',
            'dob' => '2000-01-14',
            'height' => 180,
            'weight' => 65,
            'description' => 'brief description by athletes',
        ]);


        $user = factory('App\User')->create();

        $response = $this->actingAs($user)->call('get', 'student/'.$student->id.'/edit');
        $this->assertEquals(200, $response->status());

        $this->assertDatabaseHas('students', [
            'last_name' => 'Starichenko',
        ]);

        $student->update(['last_name'=>'Star']);

        $this->assertDatabaseHas('students', [
            'last_name' => 'Star',
        ]);


    }
    /** @test */
    public function create_students(){

        $user = factory('App\User')->create();

        $response = $this->actingAs($user)->call('get','/student/create');
        $this->assertEquals(200, $response->status());

        factory('App\Student')->create([
            'last_name' => 'Starichenko',
            'first_name' => 'Andrei',
            'dob' => '2000-01-14',
            'height' => 180,
            'weight' => 65,
            'description' => 'brief description by athletes',
        ]);

        $this->assertDatabaseHas('students', [
            'last_name' => 'Starichenko',
        ]);

        $this->assertDatabaseMissing('students', [
            'last_name' => 'Starichenko1',
        ]);
    }

     /** @test */
    public function destroy_student(){
        $user = factory('App\User')->create();
        $student = factory('App\Student')->create();
        $response = $this->call('get', 'student/'.$student->id);
        $this->assertEquals(200, $response->status());
        $response = $this->actingAs($user)->call('delete', 'student/'.$student->id);
        $this->assertEquals(302, $response->status());
        $student->delete();
        $this->assertSoftDeleted($student);
    }

    /** @test */
    public function routes_for_students()
    {
        $user = factory('App\User')->create();
        $student = factory('App\Student')->create();
        //index-user
        $response = $this->call('get', 'student');
        $this->assertEquals(200, $response->status());
        //create-admin
        $response = $this->actingAs($user)->call('get','/student/create');
        $this->assertEquals(200, $response->status());
        // //store-admin
        $response = $this->call('post', 'student');
        $this->assertEquals(302, $response->status());
        //show-user
        $response = $this->call('get', 'student/'.$student->id);
        $this->assertEquals(200, $response->status());
        //edit-admin
        $response = $this->actingAs($user)->call('get', 'student/'.$student->id.'/edit');
        $this->assertEquals(200, $response->status());
        //update-admin
        $response = $this->actingAs($user)->call('put', 'student/'.$student->id);
        $this->assertEquals(302, $response->status());
        //delete-admin
        $response = $this->actingAs($user)->call('delete', 'student/'.$student->id);
        $this->assertEquals(302, $response->status());
    }

}
