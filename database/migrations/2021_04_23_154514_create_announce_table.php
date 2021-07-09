<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnounceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('announce', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('desc');
            $table->string('picture1');
            $table->string('picture2');
            $table->string('picture3');
            $table->float('price');
            $table->text('create_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('announce');
    }
}
