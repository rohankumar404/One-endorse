<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TechTrends extends Component
{
    public $techandtrendsblog;

    public function __construct($techandtrendsblog = null)
    {
        $this->techandtrendsblog = $techandtrendsblog ?? [
            [
                'title' => 'Tech Trends Title',
                'excerpt' => 'Tech trends excerpt here...',
                'category' => 'Technology',
                'image_url' => 'path/to/image.jpg',
                'read_time' => 5,
            ],
        ];
    }

    public function render()
    {
        return view('components.tech-trends');
    }
}