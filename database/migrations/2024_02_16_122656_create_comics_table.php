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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string("title", 100);
            $table->text("description");
            $table->string("thumb", 50);
            $table->string("price", 10);
            $table->string("series", 50); 
            $table->string("sale_date", 50);
            $table->string("type", 30);
            $table->string("artists", 255);
            $table->string("writers", 255);
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
        Schema::dropIfExists('comics');
    }
};
