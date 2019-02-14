<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class ContinentController extends Controller
{
    //
    public function europe()
    {

        // $results = DB::select('SELECT * FROM `country` WHERE `Continent` = ?', ['europe'] );
        
    

        $europe = DB::select('SELECT * FROM `country` WHERE `Continent` = ?', ['europe']);
        dd($europe);

        $eu_view = view('common/countries', [
            'countries' => $europe
        ]);


        

        

        return $europe;

        // as response we will return/include the contents of the file /resources/views/index.php
        // return $html;
    }
}
