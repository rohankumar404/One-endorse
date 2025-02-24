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
                'image' => 'https://i.pinimg.com/736x/a4/b4/53/a4b45330892e1f350ac405defc96c68b.jpg',
                'title' => 'KL Rahul',
                'category' => 'India national cricket team, A right-handed wicket-keeper batter'
            ],
            [
                'image' => 'https://i.pinimg.com/736x/0a/73/ca/0a73ca27a4b19eb0e8d35d93c24735b6.jpg',
                'title' => 'Rishabh Pant',
                'category' => 'Indian cricket team as a wicket-keeper batter'
            ],
            [
                'image' => 'https://i.pinimg.com/474x/46/73/c8/4673c8705087f0dd4eb9eefe071a9802.jpg',
                'title' => 'MS Dhoni',
                'category' => 'Right-handed batter and a wicket-keeper'
            ],
            [
                'image' => 'https://i.pinimg.com/736x/28/10/16/2810168324c93228899b3a9d79cce54e.jpg',
                'title' => 'Axar Patel','category' => 'Indian international cricketer who plays for the Indian cricket team'
            ],
        ];

        $secondSlideData = [
            [
                'image' => 'https://images.mykhel.com/webp/images/cricket/players/2/11102.jpg',
                'title' => 'Rinku Singh',
                'category' => 'Kolkata Knight Riders'
            ],
            [
                'image' => 'https://img1.hscicdn.com/image/upload/f_auto,t_ds_square_w_800,q_50/lsci/db/PICTURES/CMS/387500/387584.jpg',
                'title' => 'Yash Dayal',
                'category' => 'Royal Challengers Bengaluru (RCB)'
            ],
            [
                'image' => 'https://documents.iplt20.com/ipl/IPLHeadshot2024/993.png',
                'title' => 'Tilak Varma','category' => 'Mumbai Indians (MI)'
            ],
            [
                'image' => 'https://media.licdn.com/dms/image/v2/D5612AQFpymQs6bGuMA/article-cover_image-shrink_600_2000/article-cover_image-shrink_600_2000/0/1726216213504?e=2147483647&v=beta&t=UCcABBfmXiR3kUxV-9Hk5l4GViZBugQAI2p6P5cXU0o',
                'title' => 'Ruturaj Gaikwad',
                'category' => 'Chennai Super Kings (CSK)'
            ],
            [
                'image' => 'data:image/jpeg;base64,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',
                'title' => 'Rajat Patidar',
                'category' => 'Royal Challengers Bengaluru (RCB)'
            ],
        ];

        return view('dashboard.brands', compact('firstSlideData', 'secondSlideData'));
    }
}
