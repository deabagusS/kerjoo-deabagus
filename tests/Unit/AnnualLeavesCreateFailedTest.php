<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\User;

class AnnualLeavesCreateFailedTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {   
        $user = factory(User::class)->create();
        
        $this->post(route('annual-leave-create'), [
            "start_date" => date("Y/m/d H:i:s"),
            "end_date" => date("Y/m/d H:i:s", strtotime('+1 day', time())),
            "description" => 'testing deskripsi cuti'
        ])->assertStatus(400);
    }
}
