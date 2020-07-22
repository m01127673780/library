<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('link')->nullable();
         
            $table->longText('title_en')->nullable();
            $table->longText('title_ar')->nullable();
            
            $table->longText('content_ar')->nullable();
            $table->longText('content_en')->nullable();
            $table->date('start_at')->nullable();
            $table->date('end_at')->nullable();
            $table->longText('photo');
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
        Schema::dropIfExists('news');
    }
}
