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
        Schema::create('videos', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('title');
            $table->integer('duration');
            $table->text('description');
            $table->string('file_path');
            $table->string('session_url');
            $table->integer('index');

            

            // Relacionamos la tabla de videos con la de cursos
            // en la base de datos
            $table->foreignId('course_id')
                  ->nullable()
                  ->constrained('courses')
                  ->opUpdate('cascade')
                  ->onDelete('cascade');

            $table->foreignId('file_id')
                ->nullable()
                ->constrained('files')
                ->opUpdate('cascade')
                ->onDelete('cascade');

            // $table->unsignedBigInteger('course_id')->nullable();
            // $table->foreign('course_id')
            //       ->references('id')
            //       ->on('courses')
            //       ->onCascade('delete');

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
        Schema::dropIfExists('videos');
    }
};
