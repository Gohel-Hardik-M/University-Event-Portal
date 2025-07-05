<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('post',function(Blueprint $table){

            $table->id();
            $table->string('title');
            $table->text('caption')->nullable();
            $table->json('photos')->nullable();
            $table->enum('post_type',['Hackathon','Event','Achievement']);
            $table->integer('university_id');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.+++
     */
    public function down(): void
    {
        Schema::dropIfExists('post');
    }
};
