<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomePageController extends Controller
{
    //
    public function show()
    {
        $Contents = [];
        
        $CarouselDir = array_diff(scandir("./images/carousel"), array('.', '..'));
        return Inertia::render('HomePage', [
            'CarouselImages' => $CarouselDir,
            'Contents' => $Contents,
        ]);
    }
}
