<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Article;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(ArticlesSeeder::class);
    }

}

class ArticlesSeeder extends Seeder
{
    public function run()
    {
        DB::table('articles')->delete();
        for ($i=1;$i<6;$i++)
        {
            Article::create([
                'user_id' => '1',
                'title' => 'Test article '.$i,
                'excerpt' => 'Excerpt from test article '.$i,
                'body' => 'Body of test article '.$i,
                'published_at' => Carbon::now(),
            ]);
        }
    }
}
