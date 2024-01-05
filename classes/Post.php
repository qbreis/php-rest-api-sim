<?php

class Post {

    // Simulated array to store posts
    private static $posts = [];

    // Post properties
    private $id;
    private $title;
    private $body;

    // Constructor to set post properties
    public function __construct($data) {
        foreach ($data as $key => $value) {
            $this->$key = $value;
        }
    }

    // Simulated method to get all posts
    public static function getAll() {
        return self::$posts;
    }

    // Simulated method to get a post by ID
    public static function getById($id) {
        foreach (self::$posts as $post) {
            if ($post->id == $id) {
                return $post;
            }
        }
        return null;
    }

    // Method to create a new post
    public static function create($postData) {
        $newPost = new self($postData + ['id' => count(self::$posts) + 1]);
        self::$posts[] = $newPost;
        return $newPost;
    }
}