<?php
require "vendor/autoload.php";
require "core/bootstrap.php";

Router::load("routes.php")->direct(Request::uri(),$_SERVER["REQUEST_METHOD"]);

// $modifiedArray = array_map(function($post){
//     return $post->title;
// },$posts);

// $title = array_filter($posts , function($post){
//     return $post->isPublish;
// });