<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYuserssTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('yuserss')) {
            Schema::create('yuserss', function (Blueprint $table) {
                $table->id();
                $table->char('name', 20);
                $table->char('mail', 50);
                $table->char('password', 20);
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('yuserss');
    }
}
