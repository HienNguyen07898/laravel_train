<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username', 15)->unique();
            $table->string('password', 100);
            $table->string('name', 50)->nullable();
            $table->string('email', 100);
            $table->string('avatar', 100)->nullable();
            $table->tinyInteger('role');
            $table->text('description')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->index(['username', 'email']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
