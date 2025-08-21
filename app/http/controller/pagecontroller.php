<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function projects()
    {
        // Static project data
        $projects = [
            [
                'title' => 'E-commerce Website',
                'description' => 'A fully functional e-commerce site with payment integration.',
                'technologies' => ['Laravel', 'Vue.js', 'MySQL', 'Stripe API']
            ],
            [
                'title' => 'Task Management App',
                'description' => 'A productivity app for managing tasks and projects.',
                'technologies' => ['React', 'Node.js', 'MongoDB']
            ],
            [
                'title' => 'Weather Dashboard',
                'description' => 'Real-time weather information with forecasting.',
                'technologies' => ['JavaScript', 'OpenWeather API', 'Chart.js']
            ]
        ];

        return view('projects', compact('projects'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function blog()
    {
        // Static blog posts
        $posts = [
            [
                'title' => 'Getting Started with Laravel',
                'excerpt' => 'Learn the basics of Laravel framework and how to set up your first project.',
                'date' => 'May 15, 2023',
                'author' => 'John Doe'
            ],
            [
                'title' => 'Building Responsive UIs with Tailwind CSS',
                'excerpt' => 'Discover how to create beautiful, responsive interfaces using Tailwind CSS.',
                'date' => 'June 2, 2023',
                'author' => 'Jane Smith'
            ],
            [
                'title' => 'API Development Best Practices',
                'excerpt' => 'Essential tips for building robust and secure APIs for your applications.',
                'date' => 'July 10, 2023',
                'author' => 'Mike Johnson'
            ]
        ];

        return view('blog', compact('posts'));
    }
}
