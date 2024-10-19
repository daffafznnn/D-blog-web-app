<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
    ]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

Route::get('/posts', function () {
    return view('posts', [
        'title' => 'Blog posts',
        'posts' => [
            [
                'title' => 'Post One',
                'subtitle'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.',
                'slug' => 'post-one',
                'img'=> 'https://i.pinimg.com/736x/a0/77/d8/a077d85e762f6ce88bea4b7df543ce6f.jpg',
                'category' => 'Web Development',
                'author' => 'Author One',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quidem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem. Consectetur, deserunt!',
            ],
            [
                'title' => 'Post Two',
                'subtitle'=> 'Dolor sit amet consectetur adipisicing elit. Voluptas, quae.',
                'slug' => 'post-two',
                'img'=> 'https://i.pinimg.com/736x/a0/77/d8/a077d85e762f6ce88bea4b7df543ce6f.jpg',
                'category' => 'Programming',
                'author' => 'Author Two',
                'body' => 'Dolor sit amet, consectetur adipisicing elit. Quisquam, quidem. Dolore natus, maiores quisquam quos optio. Ex, voluptatum!',
            ],
            [
                'title' => 'Post Three',
                'subtitle'=> 'Quisquam, quidem. Illum, voluptatum.',
                'slug' => 'post-three',
                'img'=> 'https://i.pinimg.com/736x/a0/77/d8/a077d85e762f6ce88bea4b7df543ce6f.jpg',
                'category' => 'Web Design',
                'author' => 'Author Three',
                'body' => 'Quisquam, quidem. Illum, voluptatum. Nemo, alias cumque repudiandae, unde soluta nesciunt eveniet debitis accusantium!',
            ],
            [
                'title' => 'Post Four',
                'subtitle'=> 'Ullam est, repellat hic!',
                'slug' => 'post-four',
                'img'=> 'https://i.pinimg.com/736x/a0/77/d8/a077d85e762f6ce88bea4b7df543ce6f.jpg',
                'category' => 'SEO',
                'author' => 'Author Four',
                'body' => 'Ullam est, repellat hic! Veniam sit dolore nesciunt. Dignissimos, numquam et harum eveniet inventore.',
            ],
            [
                'title' => 'Post Five',
                'subtitle'=> 'Eos laborum debitis.',
                'slug' => 'post-five',
                'img'=> 'https://i.pinimg.com/736x/a0/77/d8/a077d85e762f6ce88bea4b7df543ce6f.jpg',
                'category' => 'Marketing',
                'author' => 'Author Five',
                'body' => 'Eos laborum debitis. Doloribus non quas repellat optio! Assumenda, delectus! Veritatis exercitationem sed numquam.',
            ],
        ]
    ]);
});

Route::get('/posts/{slug}', function ($slug) {
    return view('post-detail', [
        'title' => 'Post',
        'post' => [
            'title' => 'Post One',
            'subtitle'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.',
            'slug' => 'post-one',
            'img'=> 'https://i.pinimg.com/736x/a0/77/d8/a077d85e762f6ce88bea4b7df543ce6f.jpg',
            'category' => 'Web Development',
            'author' => 'Author One',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quidem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem. Consectetur, deserunt!',
        ],
    ]);
});
