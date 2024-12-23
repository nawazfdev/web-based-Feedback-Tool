<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->text('content');  // content of the comment
            $table->foreignId('feedback_id')->constrained()->onDelete('cascade');  // feedback the comment belongs to
            $table->foreignId('user_id')->constrained()->onDelete('cascade');  // user who made the comment
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
