<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Services\UserService;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use function PHPUnit\Framework\assertTrue;

class UserServiceTest extends TestCase
{
    private UserService $userService;
    protected function setUp(): void {
        parent::setUp();
        $this->userService = $this->app->make(UserService::class);
    }

    function testSample() : void {
        assertTrue(true);
    }
}
