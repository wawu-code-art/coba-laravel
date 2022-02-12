<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(50)->create();

        User::create([
            'name' => 'Heribertus Wiku',
            'email' => 'wiku.heribertus@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'category_id' => 1,
            'user_id' => 1,
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, a.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, aspernatur! Dolor quam suscipit quidem nobis saepe, dignissimos, quisquam, cupiditate voluptas esse sapiente ipsum dolores. Voluptatum repellat maiores neque repellendus doloribus expedita tenetur veritatis. Beatae error velit ab ad hic. Quia necessitatibus magnam impedit accusantium iure, accusamus officiis voluptatem aliquid! Numquam harum vero ipsam officiis quisquam praesentium odit molestias cumque est dolore sint blanditiis quo officia nostrum, animi similique repudiandae dignissimos quas! Et quidem, nulla in impedit, quisquam itaque voluptatem ducimus velit obcaecati maiores similique possimus laudantium quia provident nam cumque, esse odit officiis quae quibusdam repellat temporibus cupiditate corporis vel.'
        ]);
        Post::create([
            'title' => 'Judul Kedua',
            'category_id' => 1,
            'user_id' => 1,
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, a.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, aspernatur! Dolor quam suscipit quidem nobis saepe, dignissimos, quisquam, cupiditate voluptas esse sapiente ipsum dolores. Voluptatum repellat maiores neque repellendus doloribus expedita tenetur veritatis. Beatae error velit ab ad hic. Quia necessitatibus magnam impedit accusantium iure, accusamus officiis voluptatem aliquid! Numquam harum vero ipsam officiis quisquam praesentium odit molestias cumque est dolore sint blanditiis quo officia nostrum, animi similique repudiandae dignissimos quas! Et quidem, nulla in impedit, quisquam itaque voluptatem ducimus velit obcaecati maiores similique possimus laudantium quia provident nam cumque, esse odit officiis quae quibusdam repellat temporibus cupiditate corporis vel.'
        ]);
        Post::create([
            'title' => 'Judul Ketiga',
            'category_id' => 2,
            'user_id' => 1,
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, a.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, aspernatur! Dolor quam suscipit quidem nobis saepe, dignissimos, quisquam, cupiditate voluptas esse sapiente ipsum dolores. Voluptatum repellat maiores neque repellendus doloribus expedita tenetur veritatis. Beatae error velit ab ad hic. Quia necessitatibus magnam impedit accusantium iure, accusamus officiis voluptatem aliquid! Numquam harum vero ipsam officiis quisquam praesentium odit molestias cumque est dolore sint blanditiis quo officia nostrum, animi similique repudiandae dignissimos quas! Et quidem, nulla in impedit, quisquam itaque voluptatem ducimus velit obcaecati maiores similique possimus laudantium quia provident nam cumque, esse odit officiis quae quibusdam repellat temporibus cupiditate corporis vel.'
        ]);
    }
}
