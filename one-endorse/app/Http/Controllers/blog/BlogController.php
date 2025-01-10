<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $featuredBlogs = [
            [
                'title' => 'The Impact of Sports Celebs-Brand Collaborations',
                'excerpt' => 'Explore the dynamic world of sports marketing and discover how Sports Celebs-brand collaborations are reshaping the game.',
                'category' => 'Sports',
                'image_url' => 'https://img.freepik.com/free-photo/young-male-soccer-football-player-training-isolated-gradient-wall_155003-37551.jpg',
                'read_time' => 5,
            ],
            [
                'title' => 'Another Blog Post',
                'excerpt' => 'Explore the dynamic world of sports marketing and discover how Sports Celebs-brand collaborations are reshaping the game.',
                'category' => 'Technology',
                'image_url' => 'https://img.freepik.com/free-photo/young-male-soccer-football-player-training-isolated-gradient-wall_155003-37551.jpg',
                'read_time' => 3,
            ],
            [
                'title' => 'Another Blog Post',
                'excerpt' => 'Explore the dynamic world of sports marketing and discover how Sports Celebs-brand collaborations are reshaping the game.',
                'category' => 'Technology',
                'image_url' => 'https://img.freepik.com/free-photo/young-male-soccer-football-player-training-isolated-gradient-wall_155003-37551.jpg',
                'read_time' => 3,
            ],
            [
                'title' => 'Another Blog Post',
                'excerpt' => 'Explore the dynamic world of sports marketing and discover how Sports Celebs-brand collaborations are reshaping the game.',
                'category' => 'Technology',
                'image_url' => 'https://img.freepik.com/free-photo/young-male-soccer-football-player-training-isolated-gradient-wall_155003-37551.jpg',
                'read_time' => 3,
            ],
            [
                'title' => 'Another Blog Post',
                'excerpt' => 'Explore the dynamic world of sports marketing and discover how Sports Celebs-brand collaborations are reshaping the game.',
                'category' => 'Technology',
                'image_url' => 'https://img.freepik.com/free-photo/young-male-soccer-football-player-training-isolated-gradient-wall_155003-37551.jpg',
                'read_time' => 3,
            ],
            [
                'title' => 'Another Blog Post',
                'excerpt' => 'Explore the dynamic world of sports marketing and discover how Sports Celebs-brand collaborations are reshaping the game.',
                'category' => 'Technology',
                'image_url' => 'https://img.freepik.com/free-photo/young-male-soccer-football-player-training-isolated-gradient-wall_155003-37551.jpg',
                'read_time' => 3,
            ],
        ];
        $globaltrendsblog = [
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
        $beyondfieldblog = [
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

        return view('blog.blogs', compact('featuredBlogs', 'globaltrendsblog', 'beyondfieldblog', 'techandtrendsblog'));
    }
}