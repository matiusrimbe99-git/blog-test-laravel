<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use League\CommonMark\Block\Element\Paragraph;
use Ramsey\Uuid\Type\Integer;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $title = $this->faker->paragraph(1),
            'slug' => Str::slug($title),
            'users_id' => $this->faker->numberBetween(1, 2),
            'category_id' => $this->faker->numberBetween(1,5),
            'content' => $this->faker->paragraph(50),
            'image' => 'assets/img/news/img01.jpg',
        ];
    }
}
