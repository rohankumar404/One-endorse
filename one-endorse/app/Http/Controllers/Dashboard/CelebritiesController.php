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
                'image' => 'https://i.pinimg.com/736x/56/6d/0d/566d0d846e62f3d80692f128aadacf3a.jpg',
                'title' => 'Kotak Mahindra',
                'category' => 'Bank'
            ],
            [
                'image' => 'https://i.pinimg.com/736x/6d/92/82/6d9282b58bfce183abef0aa2c33d48ab.jpg',
                'title' => 'PUMA',
                'category' => 'Shoes'
            ],
            [
                'image' => 'https://i.pinimg.com/736x/38/93/42/3893426bb59fb7272283295c42d153e0.jpg',
                'title' => 'Motorola',
                'category' => 'Smart Phones'
            ],
            [
                'image' => 'https://i.pinimg.com/736x/70/33/e2/7033e2dec361cb9e458f6905c7d25158.jpg',
                'title' => 'Bourn Vita',
                'category' => 'Drink'
            ],
            [
                'image' => 'https://i.pinimg.com/736x/27/71/68/277168f30b539102389ead7f2ee1eba8.jpg',
                'title' => 'Crompton',
                'category' => 'Electric'
            ],            
        ];

        $secondSlideData = [
            [
                'image' => 'https://img.freepik.com/premium-photo/low-angle-view-built-structure_1048944-117189.jpg?w=740',
                'title' => 'Sports Training',
                'category' => 'Sports'
            ],
            [
                'image' => 'https://img.freepik.com/premium-photo/thermal-power-plant_11208-1069.jpg?w=740',
                'title' => 'Track Running',
                'category' => 'Athletics'
            ],
            [
                'image' => 'https://img.freepik.com/premium-photo/machine-plant-factory-manufacturing-industry-business-as-warehouse-building-automation-equipment-metal-room-as-cnc-production-process-workflow-efficiency-assembly_590464-325471.jpg?w=740',
                'title' => 'Basketball','category' => 'Team Sports'
            ],
            [
                'image' => 'https://img.freepik.com/premium-photo/low-angle-view-factory-against-sky_1048944-1565879.jpg?w=740',
                'title' => 'Basketball',
                'category' => 'Team Sports'
            ],
            [
                'image' => 'https://img.freepik.com/premium-photo/big-plant-processing-scrap-metal_120587-13167.jpg?w=740',
                'title' => 'Basketball',
                'category' => 'Team Sports'
            ],
        ];

        return view('dashboard.celebrities', compact('firstSlideData', 'secondSlideData'));
    }
}