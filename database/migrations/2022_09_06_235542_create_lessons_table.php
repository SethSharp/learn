<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class() extends Migration {
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('course_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }
};
