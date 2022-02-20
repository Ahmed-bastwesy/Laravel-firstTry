<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\ViewName;

class PostController extends Controller
{
    public function index()
    {
        $posts = [

            ['id' => 1, 'title' => "Learn PHP", 'posted_by' => "Ahmed", 'created_at' => '2018-4-20'],
            ['id' => 2, 'title' => "Solid Principles", 'posted_by' => "Mohamed", 'created_at' => '2018-4-22'],
            ['id' => 3, 'title' => "Design Pattern", 'posted_by' => "Ali", 'created_at' => '2018-4-13'],



        ];
        return view(view: 'posts.index', data: [
            'posts' => $posts,
        ]);
    }

    public function create()
    {

        return view(view: 'posts.create');
    }

    public function show($postId)
    {
        $posts = [

            ['id' => 1, 'title' => "Learn PHP", 'posted_by' => "Ahmed", 'created_at' => '2018-4-20', 'email' => 'ahmed@gmail.com'],
            ['id' => 2, 'title' => "Solid Principles", 'posted_by' => "Mohamed", 'created_at' => '2018-4-22', 'email' => 'mohamed@gmail.com'],
            ['id' => 3, 'title' => "Design Pattern", 'posted_by' => "Ali", 'created_at' => '2018-4-13', 'email' => 'ali@gmail.com'],
        ];
        foreach ($posts as $data) {
            if ($data['id'] == $postId) {
                return "</br>" . "<h2> your ID is " . $data['id'] . "</h2>" .
                    "<h2> name : " . $data['posted_by'] . "</h2>" .
                    "<h2> Email : " . $data['email'] . "</h2>" .
                    "<h2> Title : " . $data['title'] . "</h2>" .
                    "<h2> Created_at = " . $data['created_at'] . "</h2>";
            }
        }
    }

    public function update($postId)
    {
        $posts = [

            ['id' => 1, 'title' => "Learn PHP", 'posted_by' => "Ahmed", 'Description'=> "this is first id"],
            ['id' => 2, 'title' => "Solid Principles", 'posted_by' => "Mohamed", 'Description'=> "this is second id"],
            ['id' => 3, 'title' => "Design Pattern", 'posted_by' => "Ali", 'Description'=> "this is third id"],
        ];
        return view(view: 'posts.edit', data: [
            'posts' => $posts,
            'postId' => $postId,
        ]);

    }



}
