<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->delete();
        DB::table('categories')->delete();
        // DB::table('articles')->insert([
        //     'title' => 'Noticia 1',
        //     'content' => 'Contenido 1',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // DB::table('articles')->insert([
        //     'title' => 'Noticia 2',
        //     'content' => 'Contenido 2',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        //   DB::table('articles')->insert([
        //     'title' => 'Noticia 3',
        //     'content' => 'Contenido 3',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        factory(App\Article::class, 15)->create();
    }
}
