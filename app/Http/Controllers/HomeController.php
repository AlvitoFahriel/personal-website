<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Data skill bisa kamu sesuaikan
        $skills = [
            ['slug' => 'html5', 'name' => 'HTML5'],
            ['slug' => 'css3', 'name' => 'CSS3'],
            ['slug' => 'javascript', 'name' => 'JavaScript'],
            ['slug' => 'php', 'name' => 'PHP'],
            ['slug' => 'laravel', 'name' => 'Laravel'],
            ['slug' => 'python', 'name' => 'Python'],
            ['slug' => 'mysql', 'name' => 'MySQL'],
            ['slug' => 'tailwindcss', 'name' => 'Tailwind CSS'],
            ['slug' => 'bootstrap', 'name' => 'Bootstrap'],
            ['slug' => 'tensorflow', 'name' => 'TensorFlow'],
            ['slug' => 'git', 'name' => 'Git'],
            ['slug' => 'github', 'name' => 'GitHub'],
        ];

        return view('home', compact('skills'));
    }
}

