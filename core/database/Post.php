<?php
class Post
{
    public $title;
    public $isPublish;
    public function __construct($title, $isPublish){
        $this->title = $title;
        $this->isPublish = $isPublish;
    }
}

$posts = [
    new Post('The New York Times',true),
    new Post('Myanmar Alin',false),
    new Post('Times Magazine',true),
    new Post('The Daily Times',false)
]; 