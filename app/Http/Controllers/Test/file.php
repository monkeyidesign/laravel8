<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class File extends Controller
{
    public function index()
    {
        // $data['name'] = 'Finn';
        // return view('welcome', compact('data'));

        // return view('welcome');

        $data = [
            'title'=>'My App',
            'Description'=>'This is New Application',
            'author'=>'foo'
        ];

        $data2 = [
            'title'=>'My App222222222222222222',
            'Description'=>'This is New Application',
            'author'=>'foo'
        ];

        // return view('welcome')->with($data);

        //return view('welcome')->with('title','My App');
        // return view('gfg', ['article' => 'Passing Data to View']); 

        //$data[] = array(1,2,3);

        return view('welcome', compact('data', 'data2'));

        // return view('welcome', [
        //     'data' => "dasdafaffafa"
        // ]);
    }
}
