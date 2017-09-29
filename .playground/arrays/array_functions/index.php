<?php

class Post {
    public $title;
    public $published;

    public function __construct ($title, $published) {
        $this->title = $title;
        $this->published = $published;
    }
}

$posts = [
    new Post('My First Post', true),
    new Post('My Second Post', true),
    new Post('My Third Post', true),
    new Post('My Fourth Post', false),
];

// Filtering give only some data
$unpublishedPosts = array_filter($posts, function($post) {
    return !$post->published;
});
$publishedPosts = array_filter($posts, function($post) {
    return $post->published;
});

// Making Modifications
$modified = array_map(function ($post){
    return (array) $post;
}, $posts);
$modified2 = array_map(function ($moded){
    return new Post($moded['title'], $moded['published']);
}, $modified);

// Get just one part of the data
// ONLY WORKS FOR PUBLIC PROPERTIES
$titles = array_column($posts, 'title');



var_dump($titles);