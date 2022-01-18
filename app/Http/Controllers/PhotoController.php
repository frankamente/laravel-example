<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use App\Models\Post;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PhotoController extends Controller
{
    public function index()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/photos')->collect();

        $photos = collect();
        foreach ($response as $jsonPhotos) {
            $photo = new Photo();
            $photo->fill($jsonPhotos);
            $photos->push($photo);
        }
        return view('photo', compact('photos'));
    }

    public function detail(int $problem_id)
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/photos/' . $problem_id)->json();
        $photo = new Photo();
        $photo->fill($response);
        return view('photodetail', compact('photo'));
    }
}
