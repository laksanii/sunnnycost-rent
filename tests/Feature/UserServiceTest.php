<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\services\UserService;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserServiceTest extends TestCase
{
    private UserService $userService;

    protected function setUp(): void
    {
        parent::setUp();

        $this->userService = $this->app->make(UserService::class);
    }

    public function testSample()
    {
        self::assertTrue(true);
    }

    public function testLoginSuccess()
    {
        self::assertTrue($this->userService->login("prazetyo111@gmail.com","password"));
    }

    public function testLogin()
    {
        $this->withSession([
            "role" => "admin"
        ])->get("/admin/login")->assertRedirect("/admin");
    }
}