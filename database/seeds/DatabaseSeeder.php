<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Article;
use App\Comment;
use App\User;

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
        $this->call(UserSeeder::class);
        $this->call(ArticlesSeeder::class);
        $this->call(CommentSeeder::class);
    }

}

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();
        User::create([
            'name' => 'Andrey',
            'email' => 'andrey.mel97@mail.ru',
            'password' => bcrypt('andrey97'),
        ]);
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
                'user_id' => 1,
                'title' => 'Test article '.$i,
                'excerpt' => 'Excerpt from test article '.$i,
                'body' => 'Body of test article '.$i,
                'published_at' => Carbon::now()->format('Y-m-d\TH:i:s'),
            ]);
        }
    }
}

class CommentSeeder extends Seeder
{
    public function run()
    {
        DB::table('comments')->delete();
        for ($i=1;$i<4;$i++)
        {
            Comment::create([
                'user_id' => '1',
                'article_id' => '1',
                'body' => 'Comment '.$i,
                'published_at' => Carbon::now(),
            ]);
        }
    }
}
