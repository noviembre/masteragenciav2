<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title');
            $table->string('slug');
            $table->integer('category_id')->nullable();

            $table->string('duracion1')->nullable();
            $table->string('duracion2')->nullable();
            $table->integer('price')->nullable();
            $table->text('description');

            $table->text('itinerary')->nullable();
            $table->text('included')->nullable();
            $table->text('notincluded')->nullable();
            $table->text('recomendations')->nullable();

            $table->integer('user_id')->nullable();
            $table->integer('status')->default(0);
            $table->integer('views')->default(0);
            $table->integer('is_featured')->default(0);

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
        Schema::dropIfExists('posts');
    }
}
