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
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->id();
            $table->string('fullName'); 
            $table->string('username');
            $table->string('email')->unique();
            $table->string('phoneNumber')->unique();
            $table->string('address');
            $table->string('password');
            $table->string('role');
            $table->bigInteger('age');
            $table->timestamps();
            // $table->foreignId('role_id')
            // ->constrained('roles')
            // ->onUpdate('cascade')
            // ->onDelete('cascade')
            // ->comment('foreign key taking reference from id table user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};