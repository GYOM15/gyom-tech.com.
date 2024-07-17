<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return view('projects.index');
    }

    public function filter(Request $request)
    {
        $category = $request->category;

        // Simulated project data for demonstration
        $projects = [
            [
                'title' => 'Project AI 1',
                'category' => 'AI',
                'image' => '/storage/images/portfolio/pic1.jpg',
                'date' => 'Dec 14, 2023',
                'link' => '#'
            ],
            [
                'title' => 'Project AI 2',
                'category' => 'AI',
                'image' => '/storage/images/portfolio/pic1.jpg',
                'date' => 'Dec 15, 2023',
                'link' => '#'
            ],
            [
                'title' => 'Project Web 1',
                'category' => 'Web',
                'image' => '/storage/images/portfolio/web4.jpg',
                'date' => 'Dec 16, 2023',
                'link' => '#'
            ],
            [
                'title' => 'Project App 1',
                'category' => 'App',
                'image' => '/storage/images/portfolio/web1.jpg',
                'date' => 'Dec 17, 2023',
                'link' => '#'
            ],
            [
                'title' => 'Project App 1',
                'category' => 'App',
                'image' => '/storage/images/portfolio/web4.jpg',
                'date' => 'Dec 17, 2023',
                'link' => '#'
            ],
            [
                'title' => 'Project AI 1',
                'category' => 'AI',
                'image' => '/storage/images/portfolio/pic2.jpg',
                'date' => 'Dec 14, 2023',
                'link' => '#'
            ],
            [
                'title' => 'Project AI 2',
                'category' => 'AI',
                'image' => '/storage/images/portfolio/pic1.jpg',
                'date' => 'Dec 15, 2023',
                'link' => '#'
            ],
            [
                'title' => 'Project Web 1',
                'category' => 'Web',
                'image' => '/storage/images/portfolio/web1.jpg',
                'date' => 'Dec 16, 2023',
                'link' => '#'
            ],   [
                'title' => 'Project Web 1',
                'category' => 'Web',
                'image' => '/storage/images/portfolio/web4.jpg',
                'date' => 'Dec 16, 2023',
                'link' => '#'
            ],
            [
                'title' => 'Project Web 1',
                'category' => 'Web',
                'image' => '/storage/images/portfolio/web1.jpg',
                'date' => 'Dec 16, 2023',
                'link' => '#'
            ],   [
                'title' => 'Project Web 1',
                'category' => 'Web',
                'image' => '/storage/images/portfolio/web2.jpg',
                'date' => 'Dec 16, 2023',
                'link' => '#'
            ],   [
                'title' => 'Project Web 1',
                'category' => 'Web',
                'image' => '/storage/images/portfolio/web3.jpg',
                'date' => 'Dec 16, 2023',
                'link' => '#'
            ],
            
           
        ];

        // Filter projects based on category
        if ($category == 'AI') {
            $filteredProjects = array_filter($projects, function ($project) {
                return $project['category'] == 'AI';
            });
        } else {
            $filteredProjects = array_filter($projects, function ($project) {
                return $project['category'] != 'AI';
            });
        }

        return response()->json(['projects' => array_values($filteredProjects)]);
    }
}
