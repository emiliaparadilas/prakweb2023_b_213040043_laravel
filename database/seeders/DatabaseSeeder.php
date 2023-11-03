<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       
        // User::create([
        //     'name' => 'Emilia Paradila S',
        //     'email' => 'paradilasemilia@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Putri Azizah',
        //     'email' => 'azizaputri@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();


        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis atque, nostrum amet consequuntur itaque aut et sint ex',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis atque, nostrum amet consequuntur itaque aut et sint ex quis id ad vitae saepe, vel odio excepturi neque aperiam veritatis. Tempora, obcaecati. Asperiores numquam nemo fuga laudantium in error nisi cupiditate laborum dolore sapiente corporis aperiam aspernatur dolorum cumque magnam assumenda perferendis tempore doloribus repellendus dicta fugit, animi necessitatibus quos! Esse ea atque porro sapiente suscipit, id harum ad nemo repellat recusandae, quos laborum odit illo laboriosam, amet cupiditate necessitatibus facilis dolorem ut molestias iusto nulla assumenda. Recusandae nulla, unde minus accusamus odio sint, natus explicabo accusantium quos, consequuntur sunt inventore.',
        //     'category_id' => 1, 
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis atque, nostrum amet consequuntur itaque aut et sint ex',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis atque, nostrum amet consequuntur itaque aut et sint ex quis id ad vitae saepe, vel odio excepturi neque aperiam veritatis. Tempora, obcaecati. Asperiores numquam nemo fuga laudantium in error nisi cupiditate laborum dolore sapiente corporis aperiam aspernatur dolorum cumque magnam assumenda perferendis tempore doloribus repellendus dicta fugit, animi necessitatibus quos! Esse ea atque porro sapiente suscipit, id harum ad nemo repellat recusandae, quos laborum odit illo laboriosam, amet cupiditate necessitatibus facilis dolorem ut molestias iusto nulla assumenda. Recusandae nulla, unde minus accusamus odio sint, natus explicabo accusantium quos, consequuntur sunt inventore.',
        //     'category_id' => 1, 
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis atque, nostrum amet consequuntur itaque aut et sint ex',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis atque, nostrum amet consequuntur itaque aut et sint ex quis id ad vitae saepe, vel odio excepturi neque aperiam veritatis. Tempora, obcaecati. Asperiores numquam nemo fuga laudantium in error nisi cupiditate laborum dolore sapiente corporis aperiam aspernatur dolorum cumque magnam assumenda perferendis tempore doloribus repellendus dicta fugit, animi necessitatibus quos! Esse ea atque porro sapiente suscipit, id harum ad nemo repellat recusandae, quos laborum odit illo laboriosam, amet cupiditate necessitatibus facilis dolorem ut molestias iusto nulla assumenda. Recusandae nulla, unde minus accusamus odio sint, natus explicabo accusantium quos, consequuntur sunt inventore.',
        //     'category_id' => 2, 
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis atque, nostrum amet consequuntur itaque aut et sint ex',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis atque, nostrum amet consequuntur itaque aut et sint ex quis id ad vitae saepe, vel odio excepturi neque aperiam veritatis. Tempora, obcaecati. Asperiores numquam nemo fuga laudantium in error nisi cupiditate laborum dolore sapiente corporis aperiam aspernatur dolorum cumque magnam assumenda perferendis tempore doloribus repellendus dicta fugit, animi necessitatibus quos! Esse ea atque porro sapiente suscipit, id harum ad nemo repellat recusandae, quos laborum odit illo laboriosam, amet cupiditate necessitatibus facilis dolorem ut molestias iusto nulla assumenda. Recusandae nulla, unde minus accusamus odio sint, natus explicabo accusantium quos, consequuntur sunt inventore.',
        //     'category_id' => 2, 
        //     'user_id' => 2
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
