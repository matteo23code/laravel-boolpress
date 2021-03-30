<?php

use App\Author;
use App\AuthorDetail;
use App\Post;
use App\Comment;
use Faker\Generator as Faker;

use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $faker->addProvider(new WW\Faker\Provider\Picture($faker));

        for ($i = 0; $i < 10; $i++) {
            $author = new Author();
            $author->name = $faker->firstName();
            $author->last_name = $faker->lastName();
            $author->email = $faker->email();
            $author->save();

            $authorDetail = new AuthorDetail();
            $authorDetail->bio = $faker->text();
            $authorDetail->website = $faker->url();
            $authorDetail->image = 'https://picsum.photos/seed/' . rand(0, 1000) . '/200/300';

            $author->detail()->save($authorDetail);

            for ($i = 0; $i < 10; $i++) {
                $post = new Post();
                $post->title = $faker->text(20);
                $post->body = $faker->text();
                $author->post()->save($post);
            }
            for ($i = 0; $i < 10; $i++) {
                $comment = new Comment();
                $comment->body = $faker->text();
                $comment->author_id = rand(1, 10);
                $comment->post_id = rand(1, 10);
                $post->comments()->save($comment);
            }
        }
    }
}
