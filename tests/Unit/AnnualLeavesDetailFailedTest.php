<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\User;

class AnnualLeavesDetailFailedTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {   
        $this->get(route('annual-leave-find', ['id' => 'unknown']))->assertStatus(400);
    }
}
