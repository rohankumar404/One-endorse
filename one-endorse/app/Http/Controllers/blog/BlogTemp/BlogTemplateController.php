<?php

namespace App\Http\Controllers\blog\BlogTemp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogTemplateController extends Controller
{
    public function index()
    {
        $techandtrendsblog = [
            [
                'title' => 'The Impact of Sports Celebs-Brand Collaborations',
                'excerpt' => 'Explore the dynamic world of sports marketing and discover how Sports Celebs-brand collaborations are reshaping the game.',
                'category' => 'Sports',
                'image_url' => 'https://img.freepik.com/free-photo/young-male-soccer-football-player-training-isolated-gradient-wall_155003-37551.jpg',
                'read_time' => 5,
            ],
            [
                'title' => 'The Impact of Sports Celebs-Brand Collaborations',
                'excerpt' => 'Explore the dynamic world of sports marketing and discover how Sports Celebs-brand collaborations are reshaping the game.',
                'category' => 'Sports',
                'image_url' => 'https://img.freepik.com/free-photo/young-male-soccer-football-player-training-isolated-gradient-wall_155003-37551.jpg',
                'read_time' => 5,
            ],
            [
                'title' => 'The Impact of Sports Celebs-Brand Collaborations',
                'excerpt' => 'Explore the dynamic world of sports marketing and discover how Sports Celebs-brand collaborations are reshaping the game.',
                'category' => 'Sports',
                'image_url' => 'https://img.freepik.com/free-photo/young-male-soccer-football-player-training-isolated-gradient-wall_155003-37551.jpg',
                'read_time' => 5,
            ],
        ];

        return view('blog.blog-temp.index', compact('techandtrendsblog'));
    }
}