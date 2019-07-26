<?php

namespace Tests\Unit;

use App\Quote;
use App\Author;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class QuoteTest extends TestCase
{
    use DatabaseTransactions;

    protected $connectionsToTransact;

    public function setUp()
    {
        $this->connectionsToTransact = ['mysql_testing'];

        parent::setUp();
    }

    /** @test */
    public function it_can_have_a_quote()
    {
        factory(Quote::class)->create();

        $this->assertEquals(1, Quote::count());

        echo "\nUsing database: " . DB::connection()->getDatabaseName() . "\n";

        $quoteCount = Quote::count();

        echo "Quote Count is: {$quoteCount}\n";
    }

    /** @test */
    public function it_can_have_many_authors()
    {
        $quote = create(Quote::class);

        create(Author::class, [], [], 2)->each(function ($author) use ($quote) {
            $author->quotes()->save($quote);
        });

        $this->assertCount(2, $quote->authors);

        $quoteCount = Quote::count();

        echo "\nQuote Count is: {$quoteCount}\n";
    }
}