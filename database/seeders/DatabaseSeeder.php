<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        


        // User::create(
        //     [
        //         'name' => 'Given Jeremia',
        //         'email' => 'jeremiagiven@gmail.com',
        //         'password' => bcrypt('12345')
        //     ]
        // );
        // User::create(
        //     [
        //         'name' => 'Jeremia Given',
        //         'email' => 'givenjeremia@gmail.com',
        //         'password' => bcrypt('12345')
        //     ]
        // );
        User::factory(5)->create();
        Category::create(
            [
                'nama' => 'Web Programing',
                'slug' => 'web-programing'
            ]
        );
        Category::create(
            [
                'nama' => 'Personal',
                'slug' => 'personal'
            ]
        );
        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Ke Kesatu',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-kesatu',
        //     'excerpt' => 'Kesatu Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, recusandae exercitationem.',
        //     'body'=> '<p>Kesatu Lorem ipsum dolor sit amet consectetur adipisicing elit.</p><p>Ipsam, recusandae exercitationem.</p><p>Quas alias nobis, molestiae vero natus veniam cupiditate blanditiis ullam quam sint ad excepturi minus ex iure pariatur.</p><p>Commodi cumque ad magni fuga perspiciatis, obcaecati, id earum vitae recusandae asperiores distinctio eligendi dolorum. Quo amet obcaecati placeat maxime officiis.</p><p>Doloremque deserunt voluptates officia repudiandae corrupti ea eius neque, natus iste a, vel tenetur numquam? Accusamus incidunt numquam delectus nesciunt nihil quisquam voluptas dolorum consequuntur rerum, eos, et cum quam!</p>',
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Kedua',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Kedua Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, recusandae exercitationem.',
        //     'body'=> '<p>Kedua Lorem ipsum dolor sit amet consectetur adipisicing elit.</p><p>Ipsam, recusandae exercitationem.</p><p>Quas alias nobis, molestiae vero natus veniam cupiditate blanditiis ullam quam sint ad excepturi minus ex iure pariatur.</p><p>Commodi cumque ad magni fuga perspiciatis, obcaecati, id earum vitae recusandae asperiores distinctio eligendi dolorum. Quo amet obcaecati placeat maxime officiis.</p><p>Doloremque deserunt voluptates officia repudiandae corrupti ea eius neque, natus iste a, vel tenetur numquam? Accusamus incidunt numquam delectus nesciunt nihil quisquam voluptas dolorum consequuntur rerum, eos, et cum quam!</p>',
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Ketiga',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Ketiga Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, recusandae exercitationem.',
        //     'body'=> '<p>Ketiga Lorem ipsum dolor sit amet consectetur adipisicing elit.</p><p>Ipsam, recusandae exercitationem.</p><p>Quas alias nobis, molestiae vero natus veniam cupiditate blanditiis ullam quam sint ad excepturi minus ex iure pariatur.</p><p>Commodi cumque ad magni fuga perspiciatis, obcaecati, id earum vitae recusandae asperiores distinctio eligendi dolorum. Quo amet obcaecati placeat maxime officiis.</p><p>Doloremque deserunt voluptates officia repudiandae corrupti ea eius neque, natus iste a, vel tenetur numquam? Accusamus incidunt numquam delectus nesciunt nihil quisquam voluptas dolorum consequuntur rerum, eos, et cum quam!</p>',
        // ]);
    
        // Post::create([
        //     'title' => 'Judul Ke Keempat',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Keempat Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, recusandae exercitationem.',
        //     'body'=> '<p>Keempat Lorem ipsum dolor sit amet consectetur adipisicing elit.</p><p>Ipsam, recusandae exercitationem.</p><p>Quas alias nobis, molestiae vero natus veniam cupiditate blanditiis ullam quam sint ad excepturi minus ex iure pariatur.</p><p>Commodi cumque ad magni fuga perspiciatis, obcaecati, id earum vitae recusandae asperiores distinctio eligendi dolorum. Quo amet obcaecati placeat maxime officiis.</p><p>Doloremque deserunt voluptates officia repudiandae corrupti ea eius neque, natus iste a, vel tenetur numquam? Accusamus incidunt numquam delectus nesciunt nihil quisquam voluptas dolorum consequuntur rerum, eos, et cum quam!</p>',
        // ]);

    }
}

