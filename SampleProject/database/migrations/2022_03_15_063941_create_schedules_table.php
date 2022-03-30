<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('schedules')) {
            Schema::create('schedules', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->char('scheduledate', 20);
                $table->char('plase', 20);
                $table->char('schedule_title', 50);
                $table->integer('admin_id');
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
        Schema::dropIfExists('schedules');
    }
}
