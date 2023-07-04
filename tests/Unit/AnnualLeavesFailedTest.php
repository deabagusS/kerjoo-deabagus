<?php

namespace Tests\Unit;

use Tests\TestCase;

class AnnualLeavesFailedTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {   
        $this->json('GET', route('annual-leave-list'), [
            'filter' => [
                'user_id' => 'abc'
            ]
        ])->assertStatus(400);
    }
}
