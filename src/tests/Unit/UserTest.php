<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;

class UserTest extends TestCase
{
    use RefreshDatabase;

    private $attributes;

    public function setUp(): void
    {
        parent::setUp();

        $this->attributes = [
            'name'     => 'John Appleseed',
            'email'    => 'hoge@example.com',
            'password' => bcrypt('test'),
        ];
    }

    public function test_register()
    {
        User::create($this->attributes);
        $this->assertDatabaseHas('users', $this->attributes);
    }
}
