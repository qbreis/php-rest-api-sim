<?php
/*
$posts = [
    Post::create([
        'title' => 'Post Title',
        'body'  => 'This is the body of the first post.'
    ]),
    Post::create([
        'title' => 'New Post Title',
        'body'  => 'This is the body of the new post.'
    ])
];
*/
$posts = [];

array_push(
    $posts, 
    Post::create([
        'title' => 'Post Title',
        'body'  => 'This is the body of the first post.'
    ])
);

array_push(
    $posts, 
    Post::create([
        'title' => 'New Post Title',
        'body'  => 'This is the body of the new post.'
    ])
);