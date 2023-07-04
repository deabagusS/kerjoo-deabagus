<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\models\AnnualLeaves;

class AnnualLeavesDetailTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {   
        $this->get(route('annual-leave-find', ['id' => AnnualLeaves::all()->random()->id]))->assertStatus(200);
    }
}
