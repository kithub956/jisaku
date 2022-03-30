<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminpostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('adminposts')) {
            Schema::create('adminposts', function (Blueprint $table) {
                $table->id();
                $table->char('name', 20);
                $table->char('title', 40);
                $table->text('content');
                $table->integer('member_id');
                $table->integer('category');
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
        Schema::dropIfExists('adminposts');
    }
}
