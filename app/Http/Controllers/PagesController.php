<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'Welcome to my blog';
        return view('pages.index')->with('title', $title);
    }

    public function about() {
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }

    public function services() {
        $data = array(
            'title' => 'Services!',
            'services' => ['Project Analysis', 'Implementation', 'Deployment']
        );
        return view('pages.services')->with($data);
    }

    public function auth() {
        return view('layouts.app');
    }
}
