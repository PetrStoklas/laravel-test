<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    //
    public function homepage()
    {
        $top_rated = view('movies/top_rated');
        $weekly_movie = view('movies/weekly_movie');
        

        $header = view('common/header');

        $main = view('common/main', [
            'top_rated' => $top_rated,
            'weekly_movie' => $weekly_movie
        ]);

        $footer = view('common/footer');
            
        $html = view('homepage', [
            'header' => $header,
            'content' => $main,
            'footer' => $footer
        ]);

        

        return $html;

        // as response we will return/include the contents of the file /resources/views/index.php
        // return $html;
    }
}
