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
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Azriel Amiezal',
        //     'email' => 'azmiezal61@gmail.com',
        //     'password' => bcrypt('Azriel123')
        // ]);

        // User::create([
        //     'name' => 'Abu Bakar',
        //     'email' => 'abu@gmail.com',
        //     'password' => bcrypt('Mantapkali123')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'C++',
        //     'slug' => 'first-title',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et labore illum, deleniti, architecto voluptatibus blanditiis pariatur ducimus ex id quasi ipsam nobis magnam!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et labore illum, deleniti, architecto voluptatibus blanditiis pariatur ducimus ex id quasi ipsam nobis magnam! Doloremque perferendis a aspernatur blanditiis. Voluptatem a possimus quos molestiae laudantium voluptate quidem eveniet fuga vero explicabo ea, iure, alias, dolorum tempore rem autem tempora. Unde commodi dignissimos veritatis ex qui ab eaque beatae, voluptates accusamus quas, cum mollitia sint, inventore deserunt. Nesciunt accusantium blanditiis unde qui delectus in deserunt voluptatum illo libero nulla! Architecto reiciendis totam optio. Natus voluptate perferendis temporibus suscipit nam quasi perspiciatis. Fugit, expedita quos. Sit quis ea incidunt consectetur magni, possimus omnis.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Java',
        //     'slug' => 'second-title',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et labore illum, deleniti, architecto voluptatibus blanditiis pariatur ducimus ex id quasi ipsam nobis magnam!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et labore illum, deleniti, architecto voluptatibus blanditiis pariatur ducimus ex id quasi ipsam nobis magnam! Doloremque perferendis a aspernatur blanditiis. Voluptatem a possimus quos molestiae laudantium voluptate quidem eveniet fuga vero explicabo ea, iure, alias, dolorum tempore rem autem tempora. Unde commodi dignissimos veritatis ex qui ab eaque beatae, voluptates accusamus quas, cum mollitia sint, inventore deserunt. Nesciunt accusantium blanditiis unde qui delectus in deserunt voluptatum illo libero nulla! Architecto reiciendis totam optio. Natus voluptate perferendis temporibus suscipit nam quasi perspiciatis. Fugit, expedita quos. Sit quis ea incidunt consectetur magni, possimus omnis.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'My Achievements',
        //     'slug' => 'third-title',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et labore illum, deleniti, architecto voluptatibus blanditiis pariatur ducimus ex id quasi ipsam nobis magnam!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et labore illum, deleniti, architecto voluptatibus blanditiis pariatur ducimus ex id quasi ipsam nobis magnam! Doloremque perferendis a aspernatur blanditiis. Voluptatem a possimus quos molestiae laudantium voluptate quidem eveniet fuga vero explicabo ea, iure, alias, dolorum tempore rem autem tempora. Unde commodi dignissimos veritatis ex qui ab eaque beatae, voluptates accusamus quas, cum mollitia sint, inventore deserunt. Nesciunt accusantium blanditiis unde qui delectus in deserunt voluptatum illo libero nulla! Architecto reiciendis totam optio. Natus voluptate perferendis temporibus suscipit nam quasi perspiciatis. Fugit, expedita quos. Sit quis ea incidunt consectetur magni, possimus omnis.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'My First Crush',
        //     'slug' => 'fourth-title',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et labore illum, deleniti, architecto voluptatibus blanditiis pariatur ducimus ex id quasi ipsam nobis magnam!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et labore illum, deleniti, architecto voluptatibus blanditiis pariatur ducimus ex id quasi ipsam nobis magnam! Doloremque perferendis a aspernatur blanditiis. Voluptatem a possimus quos molestiae laudantium voluptate quidem eveniet fuga vero explicabo ea, iure, alias, dolorum tempore rem autem tempora. Unde commodi dignissimos veritatis ex qui ab eaque beatae, voluptates accusamus quas, cum mollitia sint, inventore deserunt. Nesciunt accusantium blanditiis unde qui delectus in deserunt voluptatum illo libero nulla! Architecto reiciendis totam optio. Natus voluptate perferendis temporibus suscipit nam quasi perspiciatis. Fugit, expedita quos. Sit quis ea incidunt consectetur magni, possimus omnis.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
