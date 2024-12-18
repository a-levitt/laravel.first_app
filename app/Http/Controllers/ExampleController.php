<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function homePage() {
        // mockup database data
        $someData = 'Brandon';
        $skills = ['React', 'Autotests', 'Laravel'];

        return view('homePage', 
        ['workSkills'=>$skills, 'name'=>$someData, 'job'=>'QA Engineer']);
    }

    public function aboutPage() {
        return view('single-post');
    }
}
