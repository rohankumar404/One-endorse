<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    public function index()
    {
        $firstSlideData = [
            [
                'image' => 'https://i.pinimg.com/736x/e1/6b/50/e16b5086eb5f938f67ef11baf1ed7c39.jpg',
                'title' => 'Morning Run',
                'category' => 'South Movies Actor'
            ],
            [
                'image' => 'https://i.pinimg.com/236x/02/d0/12/02d012d0b88369585008bd42adac465e.jpg',
                'title' => 'Akshay Kumar',
                'category' => 'Movies Actor'
            ],
            [
                'image' => 'https://i.pinimg.com/236x/65/11/2d/65112d172f33864d6abeed170e298b23.jpg',
                'title' => 'Rashmika Mandanna',
                'category' => 'South Movies Actor'
            ],
            [
                'image' => 'https://i.pinimg.com/236x/d7/57/2f/d7572fd9fab1072aed72093eac1caef0.jpg',
                'title' => 'ranveer kapoor',
                'category' => 'Movies Actor'
            ],
            [
                'image' => 'https://i.pinimg.com/236x/c4/ce/ea/c4ceea4597c0b552ed1392dd53756237.jpg',
                'title' => 'Ajay Devgan',
                'category' => 'Movies Actor'
            ],
        ];

        $secondSlideData = [
            [
                'image' => 'https://i.pinimg.com/236x/9a/82/b1/9a82b108147779c98444ce4daf88a716.jpg',
                'title' => 'Rishabh Pant',
                'category' => 'Cricket'
            ],
            [
                'image' => 'https://i.pinimg.com/236x/b9/a7/bf/b9a7bffc9b1cf7464396243a5e745e25.jpg',
                'title' => 'Manu Bhaker',
                'category' => 'Shooting'
            ],
            [
                'image' => 'https://i.pinimg.com/736x/28/10/16/2810168324c93228899b3a9d79cce54e.jpg',
                'title' => 'Axar Patel','category' => 'Cricket'
            ],
            [
                'image' => 'https://i.pinimg.com/474x/46/73/c8/4673c8705087f0dd4eb9eefe071a9802.jpg',
                'title' => 'MS Dhoni',
                'category' => 'Cricket'
            ],
            [
                'image' => 'https://i.pinimg.com/474x/bb/45/45/bb4545fd8073a34ec3f20fc411014d50.jpg',
                'title' => 'Hardik Pandya',
                'category' => 'Cricket'
            ],
        ];

        return view('dashboard.brands', compact('firstSlideData', 'secondSlideData'));
    }
}
