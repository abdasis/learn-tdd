<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ManageTasksTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }

    /** @test */
    public function user_can_create_a_task()
    {
        $this->withoutExceptionHandling();
        /*mengunjungi halaman task*/
        $this->visit('/tasks');

        $this->submitForm('Create Task', [
            'name' => 'Task Pertama',
            'description' => 'Ini adalah diksripsi task pertama'
        ]);

        $this->seeInDatabase('tasks', [
            'name' => 'Task Pertama',
            'description' => 'Ini adalah diksripsi task pertama',
            'is_done' => 0
        ]);

        $this->seePageIs('/tasks');

        $this->see('Task Pertama');
        $this->see('Ini adalah diksripsi task pertama');
    }

    /** @test */
    public function user_can_edit_an_existing_task()
    {
        $this->assertTrue(true);
    }

    /** @test */
    public function user_can_delete_an_existing_task()
    {
        $this->assertTrue(true);
    }
}
