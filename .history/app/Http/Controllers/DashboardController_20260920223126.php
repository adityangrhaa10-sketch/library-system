<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $title = 'Library System Dashboard';
        $description = 'Sistem Informasi Pengelolaan Perpustakaan Digital.';
        $totalBooks = 8;
        $totalMembers = 5;
        $totalCategories = 5;

        return view('dashboard.index', compact(
            'title', 
            'description', 
            'totalBooks', 
            'totalMembers', 
            'totalCategories'
        ));
    }
}