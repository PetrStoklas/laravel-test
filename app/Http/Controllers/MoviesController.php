<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoviesController extends Controller
{
    //
    public function detail()
    {
        $movie_title = 'Venom';

        $info_view = view('movies/detail/info', [
            'title' => $movie_title
        ]);

        // $info_view = view('movies/detail/info');
        $cast_view = view('movies/detail/cast');
        $trailer_view = view('movies/detail/trailer');

        $main_view = view('movies/detail/main', [
            'info' => $info_view,
            'cast' => $cast_view,
            'trailer' => $trailer_view
        ]);

        $html_wrapper = view('homepage', [
            'content' => $main_view,
            'header' => view('common/header'),
            'footer' => view('common/footer')
        ]);



        return $html_wrapper;
    }

    // public function index()
    // {
    //     // $header = view('common/header');
    //     // $main = view('common/main');
    //     // $footer = view('common/footer');

    //     // $html = view('common/html');
    //     // return $html;

    //     $top_rated = view('movies/top_rated');

    //     $weekly_movie = view('movies/weekly_movie');

    //     // $main = view('')

    //     return $top_rated;
    // }
}
