<?php

namespace Tests\Feature;

use Tests\TestCase;

class MembersControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @test
     */
    public function itShowsAListOfAllMembers()
    {
        $this->withoutExceptionHandling();
        $response = $this->get('/members');

        $response->assertStatus(200);

        $response->assertViewIs('members.index');

        $response->assertSeeText('Registered Members');
    }
}
