<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Url;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Nicolaslopezj\Searchable\SearchableTrait;

class UrlController extends Controller
{
    public function index()
    {
        return view('data');
    }

    public function store(Request $request)
    {

        if($request->input('code') == null){
            $code = Str::random(5);
        } else {
            $code = $request->input('code');
        }
        $url = URL::Create([
            'full_url' => $request->input('fullurl'),
            'code' => $code
        ]);

        $backs = [
            "code" => "کد کوتاه شده = " . $code,
            "url" =>"آدرس کامل = " . $request->input('fullurl')
        ];
        return view('natije', compact('backs'));
    }

    public function natije()
    {
        return view('natije');
    }

    public function redirect($code)
    {
        $url = Url::where('code',$code)->first();
        if(!$url){
            echo 'NOT FOUND';
        }
        DB::table('urls')->where('code',$code)->increment('visit_count');
        return redirect($url->full_url);
    }
}

