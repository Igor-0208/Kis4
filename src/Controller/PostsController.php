<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class PostsController extends AbstractController
{
    public function GetPosts()
    {
        $posts = $this->json([
            'posts' => [
                [
                    'id' => '126cf35x-2c4y-483z-a0a9-158621f77a21',
                    'authorID' => '322rf35x-2c4y-483z-a0a9-158621f77a21',
                    'postTitle' => 'Kot',
                    'postText' => 'krasivo',
                    'tags' => ["cute", "animals", "mrr"],
                    'likes' => 100,
                    'views' => 500,
                    "postedTime" => "2020-04-04T17:49:05Z",
                    "updatedTime" => "2020-04-04T17:49:05Z"
                ],
                [
                    'id' => '127cf35x-2c4y-483z-a0a9-158621f77a21',
                    'authorID' => '322rf35x-2c4y-483z-a0a9-158621f77a21',
                    'postTitle' => 'Pes',
                    'postText' => 'horoshij',
                    'tags' => ["cute", "animals", "gav"],
                    'likes' => 101,
                    'views' => 500,
                    "postedTime" => "2020-05-04T17:49:05Z",
                    "updatedTime" => "2020-05-04T17:49:05Z"
                ],
                [
                    'id' => '129cf35x-2c4y-483z-a0a9-158621f77a21',
                    'authorID' => '322rf35x-2c4y-483z-a0a9-158621f77a21',
                    'postTitle' => 'ptica',
                    'postText' => 'letaet',
                    'tags' => ["cute", "animals", "letit"],
                    'likes' => 1000,
                    'views' => 5000,
                    "postedTime" => "2020-05-05T17:49:05Z",
                    "updatedTime" => "2020-05-05T17:49:05Z"
                ],
            ]
        ]);
        return $posts;
    }

    public function GetPost($id)
    {
        $post = $this->json([
            'post' => [
                [
                    'id' => $id,
                    'authorID' => '322rf35x-2c4y-483z-a0a9-158621f77a21',
                    'postTitle' => 'Kot',
                    'postText' => 'krasivo',
                    'tags' => ["cute", "animals", "mrr"],
                    'likes' => 100,
                    'views' => 500,
                    "postedTime" => "2020-04-04T17:49:05Z",
                    "updatedTime" => "2020-04-04T17:49:05Z"
                ],
            ]
        ]);
        return $post;
    }

    public function PostPost()
    {
        return $this->json(['response' => 'Post has been added successfully']);
    }

    public function PutPost($id)
    {
        return $this->json(['response' => 'Post with id ' . $id . ' has been changed successfully']);
    }

    public function DeletePost($id)
    {
        return $this->json(['response' => 'Post with id ' . $id . ' has been deleted successfully']);
    }
}
