<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function test() {
        return "h";
    }

    public function testWithParameter($name) {
        return "my name {$name}";
    }

    public function postRequtest(Request $request) {
        $all = $request->all();

        print_r($all);
    }

    public function homePage() {
        return view('homePage');
    }

    public function galleryPage() {
        return view('galleryPage');
    }

    public function aboutPage() {
        return view('aboutPage');
    }
}