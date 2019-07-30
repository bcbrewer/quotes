<?php

namespace tests\Unit;

use App\Quote;
use App\Author;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AuthorTest extends TestCase
{
    use DatabaseTransactions;

    protected $connectionsToTransact;

    public function setUp()
    {
        $this->connectionsToTransact = ['mysql_testing'];

        parent::setUp();
    }

    /** @test */
    public function it_can_have_many_quotes()
    {
        $author = create(Author::class);

        create(Quote::class, [], [], 3)->each(function ($quote) use ($author) {
            $quote->authors()->save($author);
        });

        $this->assertCount(3, $author->quotes);
    }
}