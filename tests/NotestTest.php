<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Note;

class NotestTest extends TestCase
{
    use WithoutMiddleware;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_notes_list()
    {
        //Having
        Note::create(['note' => 'My first note']);
        Note::create(['note' => 'Second note']);

        //When
        $this->visit('notes')
            //Then
            ->see('My first note')
            ->see('Second note');
    }

    public function teste_create_note()
    {
        //Route::post('notes')
        //When
        $this->post('notes')
            //Then
            ->see('Creating a note');

    }
}
