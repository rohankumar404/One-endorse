<?php

namespace App\Http\Controllers\Tables\Brands;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FindCelebrityController extends Controller
{
    private function getCelebrityData()
    {
        // This would typically come from your database
        return [
            1 => [
                'id' => 1,
                'name' => 'M S Dhoni',
                'gender' => 'M',
                'image' => 'https://i.pinimg.com/736x/c6/00/3a/c6003a1a81a790dbf115624b2a66b2ed.jpg',
                'engagement_rate' => '11.12',
                'location' => 'Ranchi, Jharkhand, India',
                'sport' => 'Cricket',
                'profile' => [
                    'age' => 42,
                    'gender' => 'Male',
                    'description' => 'MS Dhoni is an Indian professional cricketer. He is a right-handed batsman and a wicket-keeper. Widely regarded as one of the most prolific wicket-keeper-batsmen and captains, he represented the Indian cricket team and was the captain of the side in limited-overs formats from 2007 to 2017 and Test cricket from 2008 to 2014.',
                    'blocked_category' => ['Gulf Oil', 'Tyres (TVS Tyres)', 'Gentle (Dreams)', 'Insurance (Yeslnsurance, Fantasy (Winzo)'],
                    'team' => 'Chennai Super Kings, Indian Cricket Team',
                    'association_types' => [
                        'social' => '40 lac - 50 lac',
                        'digital' => '90 lac - 1 cr',
                        'endorsement' => '5-10 Cr'
                    ],
                    'latest_activity' => [
                        'https://i.pinimg.com/736x/b7/f5/d8/b7f5d828708c33f35090ad42a59bd227.jpg',
                        'https://i.pinimg.com/736x/f6/3d/d6/f63dd69578fb3c546e753de07082e278.jpg',
                        'https://i.pinimg.com/736x/a7/9c/88/a79c88ae9c75bbc1727f211f342be448.jpg',
                        'https://i.pinimg.com/736x/3f/a3/1e/3fa31e8f4e628805e9185a4aebbb163c.jpg'
                    ]
                ]
            ],
            2 => [
                'id' => 2,
                'name' => 'Rohit Sharma',
                'gender' => 'M',
                'image' => 'https://i.pinimg.com/736x/22/8f/3b/228f3bff70d17575ef7c6373b417a13e.jpg',
                'engagement_rate' => '11.12',
                'location' => 'Mumbai, Mahrastra, India',
                'sport' => 'Cricket',
                'profile' => [
                    'age' => 36,
                    'gender' => 'Male',
                    'description' => 'MS Dhoni is an Indian professional cricketer. He is a right-handed batsman and a wicket-keeper. Widely regarded as one of the most prolific wicket-keeper-batsmen and captains, he represented the Indian cricket team and was the captain of the side in limited-overs formats from 2007 to 2017 and Test cricket from 2008 to 2014.',
                    'blocked_category' => ['Gulf Oil', 'Tyres (TVS Tyres)', 'Gentle (Dreams)', 'Insurance (Yeslnsurance, Fantasy (Winzo)'],
                    'team' => 'Mumbai Indians, Indian Cricket Team',
                    'association_types' => [
                        'social' => '40 lac - 50 lac',
                        'digital' => '90 lac - 1 cr',
                        'endorsement' => '5-10 Cr'
                    ],
                    'latest_activity' => [
                        'https://i.pinimg.com/236x/08/ea/41/08ea4105874dadcef9a4c41f743e3310.jpg',
                        'https://i.pinimg.com/474x/45/d1/10/45d1101c3e4e5a0fd3abb1a0ba565e06.jpg',
                        'https://i.pinimg.com/736x/61/74/9f/61749f69a020d044cf52768d4d874e6f.jpg',
                        'https://i.pinimg.com/736x/a1/43/c5/a143c5b0d8f838205890ebb9028b3ec3.jpg',
                        'https://i.pinimg.com/736x/3f/eb/f0/3febf08e4b11d7e3fc5289e7b3d7a230.jpg'
                    ]
                ]
            ],
            // Add more celebrities as needed
        ];
    }

    public function index()
    {
        $celebrities = $this->getCelebrityData();
        $locations = ['Ranchi', 'Rohtak', 'Hyderabad'];
        $sports = ['Cricket', 'Wrestler', 'Karate'];
        $categories = ['Professional', 'Amateur', 'Olympic'];
        $costs = ['0-50L', '50L-1Cr', '1Cr-5Cr', '5Cr+'];

        return view('tables.brands.find-celebrity', compact('celebrities', 'locations', 'sports', 'categories', 'costs'));
    }

    public function show($id)
    {
        $celebrities = $this->getCelebrityData();
        
        if (!isset($celebrities[$id])) {
            abort(404); // Return 404 if celebrity not found
        }

        $celebrity = $celebrities[$id];
        
        // Return the profile view with the celebrity data
        return view('profile.celebrity.index', compact('celebrity'));
    }

    public function filter(Request $request)
    {
        $celebrities = $this->getCelebrityData();
        $filterType = $request->input('filterType');
        $filterValue = $request->input('filterValue');

        $filteredResults = collect($celebrities)->filter(function($celebrity) use ($filterType, $filterValue) {
            return strtolower($celebrity[$filterType]) === strtolower($filterValue);
        })->values()->all();

        return response()->json(['data' => $filteredResults]);
    }

    public function search(Request $request)
    {
        $celebrities = $this->getCelebrityData();
        $searchTerm = strtolower($request->input('search'));

        $searchResults = collect($celebrities)->filter(function($celebrity) use ($searchTerm) {
            return str_contains(strtolower($celebrity['name']), $searchTerm) ||
                   str_contains(strtolower($celebrity['location']), $searchTerm) ||
                   str_contains(strtolower($celebrity['sport']), $searchTerm);
        })->values()->all();

        return response()->json(['data' => $searchResults]);
    }
}