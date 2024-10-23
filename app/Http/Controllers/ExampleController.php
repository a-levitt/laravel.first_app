<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function homePage() {
        return '<h1>Homepage</h1> <a href="/about">Explore the company</a>';
    }

    public function aboutPage() {
        return '<h1>About company</h1> <a href="/">Back to homepage</a>';
    }
}
