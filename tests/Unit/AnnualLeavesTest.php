<?php

namespace Tests\Unit;

use Tests\TestCase;

class AnnualLeavesTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {   
        $this->get(route('annual-leave-list'))->assertStatus(200);
    }
}
