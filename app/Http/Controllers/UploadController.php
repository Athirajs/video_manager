<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use Illuminate\Http\Request;

class UploadController extends Controller
{


    public function index()
    {

        return Upload::all();
    }
    public function store(Request $request)
    {

        $request->validate([
            'title' => ['required'],
            'description' => ['required'],
            'url' => ['required']

        ]);

        if (preg_match("/youtube\.com\/watch\?v=([^\&\?\/]+)/", $request->url)) {
            $url = explode('v=', $request->url);
            $video_id = explode("&", $url[1]);
            // dd( $video_id);

            $video = "https://www.youtube.com/embed/" . $video_id[0];
            // dd($video);
        }

        Upload::create([
            'title' => $request->title,
            'description' => $request->description,
            'url' => $video,
        ]);
        return response()->json(null, 200);
    }
}
