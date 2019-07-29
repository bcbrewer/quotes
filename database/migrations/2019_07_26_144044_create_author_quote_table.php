<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorQuoteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('author_quote', function (Blueprint $table) {
            $table->unsignedInteger('author_id');
            $table->unsignedInteger('quote_id');
            $table->timestamps();

            $table->primary(['author_id', 'quote_id'], 'author_quote_primary');

            $table->foreign('author_id', 'author_id_foreign')
                ->references('id')->on('authors')
                ->onDelete('cascade');
            $table->foreign('quote_id', 'quote_id_foreign')
                ->references('id')->on('quotes')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('author_quote');
    }
}
