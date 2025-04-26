<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        $featuresData = [
            [
                'imgSrc' => 'path/to/image1.jpg',
                'heading' => 'Feature 1',
                'subheading' => 'Description of Feature 1',
            ],
            [
                'imgSrc' => 'path/to/image2.jpg',
                'heading' => 'Feature 2',
                'subheading' => 'Description of Feature 2',
            ],
            // Add more features as needed...
        ];

        return view('about-us', compact('featuresData'));
    }
}
