<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            
            $table->id();
            $table->string      ('title');
            $table->string      ('slugy');
            $table->text        ('exmpl');
            $table->longText    ('cntnt');
            $table->string      ('aspct');
            
            $table->string      ('unqid')->unique();
            $table->foreignId   ('rprtr')->constrained('users');

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
        Schema::dropIfExists('reports');
    }
}
