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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title');        
            $table->string('title_item');        
            $table->text('description');                  
            $table->string('thumbnail')->nullable(); 
            $table->string('platform1')->nullable(); 
            $table->string('platform2')->nullable(); 
            $table->string('platform3')->nullable(); 
            $table->string('platform4')->nullable(); 
            $table->string('platform5')->nullable(); 
            $table->string('platform6')->nullable(); 
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
        Schema::dropIfExists('services');
    }
};
