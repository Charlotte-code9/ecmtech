<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_admin_borrower_page()
    {

        // $this->assertDatabaseCount('users', 3);

        // $admin = User::where('email', 'admin@admin.com')->first();

        $admin = User::find(1);
        $this->actingAs($admin);

        $response = $this->get('/admin/borrower');


        // $response = $this->get('/');

        $response->assertSeeText("Rexan Mae Rodrigo");
        // $response->assertStatus(200);
    }
}
