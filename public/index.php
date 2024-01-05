<?php
require_once('../classes/Post.php');
require_once('../includes/initialize_posts.php');

// Now I can work with the Post class and initialized posts
// For example, get all posts
$allPosts = Post::getAll();
echo '<pre>All posts: ';print_r($allPosts);echo '</pre>';


echo '<pre>Post #2: ';print_r(Post::getById(2));echo '</pre>';

echo '<pre>Post #3: ';print_r(Post::getById(3));echo '</pre>';