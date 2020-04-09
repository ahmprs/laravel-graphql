<?php
use App\Article;
use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \App\Article::truncate();
        \App\Article::unguard();

        $faker = \Faker\Factory::create();

        \App\User::all()->each(function ($user) use ($faker) {
            $i = 0;
            foreach (range(1, 5) as $i) {
                $i = (($i + 1) % 5) + 1;
                \App\Article::create([
                    'user_id' => 1, //$i, //$user->id,
                    'title' => $faker->sentence,
                    'content' => $faker->paragraphs(3, true),
                ]);
            }
        });
    }
}
