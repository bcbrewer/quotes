<?php

namespace Tests\Unit;

use App\Quote;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    use DatabaseTransactions;

    protected $connectionsToTransact;

    public function setUp()
    {
//        $this->connectionsToTransact = ['mysql_testing'];
        $this->connectionsToTransact = ['mysql'];

        parent::setUp();
    }

    /** @test */
    public function it_gets_a_quote()
    {
        factory(Quote::class)->create();

        $this->assertEquals(1, Quote::count());
    }
}
