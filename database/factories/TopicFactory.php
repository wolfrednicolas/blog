<?php

namespace Database\Factories\DrewRoberts\Blog;

use App\Models\User;
use DrewRoberts\Blog\Models\Topic;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class TopicFactory extends Factory
{
    protected $model = Topic::class;

    public function definition()
    {
        $word = $this->faker->unique()->word;

        return [
            'slug'              => Str::slug($word),
            'title'             => $word,
            'description'       => $this->faker->sentences(1, true),
            'note'              => $this->faker->sentences(1, true),
            'pageviews'         => $this->faker->numberBetween(1, 400),
            'creator_id'        => randomOrCreateRelation(User::class),
            'updater_id'        => randomOrCreateRelation(User::class),
        ];
    }
}
