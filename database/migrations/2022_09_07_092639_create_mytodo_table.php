<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMytodoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mytodo', function (Blueprint $table) {
            $table->mediumIncrements('id');
            $table->integer('sequence');
            $table->string('username');
            $table->string('todo');
            $table->date('begin')->nullable();
            $table->date('finish')->nullable();
            $table->enum('status', ['new', 'open', 'going', 'ready', 'closed'])->default('new');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mytodo');
    }
}
