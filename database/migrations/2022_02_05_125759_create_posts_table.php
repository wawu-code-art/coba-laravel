<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->foreignId('category_id');
            $table->foreignId('user_id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('excerpt');
            $table->text('body');
            $table->timestamp('published_at')->nullable();
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


//memasukkan data ke database via terminal
// Post::create([
//     'title' => 'Judul Ketiga',
//     'category_id' => 3,
//     'slug' => 'judul-ketiga',
//     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, a.',
//     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, aspernatur! Dolor quam suscipit quidem nobis saepe, dignissimos, quisquam, cupiditate voluptas esse sapiente ipsum dolores. Voluptatum repellat maiores neque repellendus doloribus expedita tenetur veritatis. Beatae error velit ab ad hic. Quia necessitatibus magnam impedit accusantium iure, accusamus officiis voluptatem aliquid! Numquam harum vero ipsam officiis quisquam praesentium odit molestias cumque est dolore sint blanditiis quo officia nostrum, animi similique repudiandae dignissimos quas! Et quidem, nulla in impedit, quisquam itaque voluptatem ducimus velit obcaecati maiores similique possimus laudantium quia provident nam cumque, esse odit officiis quae quibusdam repellat temporibus cupiditate corporis vel.'
// ]);
