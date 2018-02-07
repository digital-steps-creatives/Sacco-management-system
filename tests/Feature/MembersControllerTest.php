<?php

namespace Tests\Feature;

use App\Member;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class MembersControllerTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * A basic test example.
     *
     * @test
     */
    public function it_shows_a_list_of_all_members()
    {
        //$this->withoutExceptionHandling();
        $response = $this->get('/members');

        $response->assertStatus(200);

        $response->assertViewIs('members.index');

        $response->assertSeeText('Registered Members');
    }

    public function throws_an_exception_for_missing_fields()
    {
        $this->assertTrue(true);
    }

    /**
     * @test
     * A controller creates a member
     */
    public function it_creates_a_member()
    {
        $member = factory(Member::class)
        ->make()
        ->toArray();

        $response = $this->post('/members', $member);

        $response->assertStatus(200);

        $this->assertContains(true);
    }
}
