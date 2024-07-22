<?php

namespace App\Models;

use Illuminate\Support\Arr;


class Post
{
	public static function all()
	{
		return [
			[
				'id' => 1,
				'slug' => 'judul-post-pertama',
				'title' => 'Judul Post Pertama',
				'author' => 'John Doe',
				'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.'
			],
			[
				'id' => 2,
				'slug' => 'judul-post-kedua',
				'title' => 'Judul Post Kedua',
				'author' => 'John Gimm',
				'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem, dolor sit amet consectetur adipisicing elit. Quisquam, quidem.'
			]
		];
	}

	public static function find($slug)
	{
		// return Arr::first(static::all(), function ($post) use ($slug) {
		// 	return $post['slug'] == $slug;
		// });

		$post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

		if (!$post) {
			abort(404);
		}

		return $post;
	}
}
