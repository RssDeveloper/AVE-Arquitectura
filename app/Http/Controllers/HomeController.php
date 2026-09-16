<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Project;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request for the home page.
     */
    public function index(): View
    {
        $featuredProjects = Project::featured()->get();
        $activeCourses = Course::active()->get();

        return view('welcome', compact('featuredProjects', 'activeCourses'));
    }
}
