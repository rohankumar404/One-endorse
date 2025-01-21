<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CelebritiesController extends Controller
{
    public function index()
    {
        $firstSlideData = [
            [
                'image' => 'https://img.freepik.com/premium-photo/baseball-player-with-bat-his-hand-is-holding-bat_1191225-7319.jpg?w=740',
                'title' => 'Morning Run',
                'category' => 'Running'
            ],
            [
                'image' => 'https://img.freepik.com/free-photo/crop-legs-kicking-ball-grass_23-2147817394.jpg?t=st=1737443807~exp=1737447407~hmac=723e9c00ea0a0eae6ab8e36b3ac97870e4a19eef76bea68c485bf1736ec70ac2&w=740',
                'title' => 'Training Session',
                'category' => 'Fitness'
            ],
            [
                'image' => 'https://img.freepik.com/premium-photo/cricket-water-bottle-player-checking-hydration-levels_1247965-30978.jpg?w=740',
                'title' => 'Strength Training',
                'category' => 'Exercise'
            ],
            [
                'image' => 'https://img.freepik.com/free-photo/woman-sportswear-playing-football_23-2148298886.jpg?t=st=1737443854~exp=1737447454~hmac=7e071fbd74bb03fcd5e56d79b5b5345eba009dc8726b3013f67228ca62ad28e9&w=740',
                'title' => 'Basketball',
                'category' => 'Team Sports'
            ],
            [
                'image' => 'https://img.freepik.com/free-photo/man-playing-basketball-outside_23-2148767579.jpg?t=st=1737443825~exp=1737447425~hmac=db3480677312adb3b16da5ec76110cd20f943953337bf9473f748168d4cecc47&w=740',
                'title' => 'Sports Training',
                'category' => 'Sports'
            ],
        ];

        $secondSlideData = [
            [
                'image' => 'https://img.freepik.com/free-photo/man-playing-basketball-outside_23-2148767579.jpg?t=st=1737443825~exp=1737447425~hmac=db3480677312adb3b16da5ec76110cd20f943953337bf9473f748168d4cecc47&w=740',
                'title' => 'Sports Training',
                'category' => 'Sports'
            ],
            [
                'image' => 'https://img.freepik.com/premium-photo/drawing-baseball-player-with-helmet_1191225-7725.jpg?w=740',
                'title' => 'Track Running',
                'category' => 'Athletics'
            ],
            [
                'image' => 'https://img.freepik.com/free-photo/crop-legs-kicking-ball-grass_23-2147817394.jpg?t=st=1737443807~exp=1737447407~hmac=723e9c00ea0a0eae6ab8e36b3ac97870e4a19eef76bea68c485bf1736ec70ac2&w=740',
                'title' => 'Basketball','category' => 'Team Sports'
            ],
            [
                'image' => 'https://img.freepik.com/premium-photo/drawing-baseball-player-with-helmet_1191225-7725.jpg?w=740',
                'title' => 'Basketball',
                'category' => 'Team Sports'
            ],
            [
                'image' => 'https://img.freepik.com/free-photo/woman-sportswear-playing-football_23-2148298886.jpg?t=st=1737443854~exp=1737447454~hmac=7e071fbd74bb03fcd5e56d79b5b5345eba009dc8726b3013f67228ca62ad28e9&w=740',
                'title' => 'Basketball',
                'category' => 'Team Sports'
            ],
        ];

        return view('dashboard.celebrities', compact('firstSlideData', 'secondSlideData'));
    }
}