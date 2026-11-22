<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Member;
use App\Models\Borrowing;

class DashboardController extends Controller
{
    public function index()
    {
        $totalCategories = Category::count();
        $totalBooks = Book::count();
        $totalMembers = Member::count();
        $totalBorrowings = Borrowing::count();
        $activeBorrowings = Borrowing::where('status', 'borrowed')->count();

        return view('dashboard', compact(
            'totalCategories',
            'totalBooks',
            'totalMembers',
            'totalBorrowings',
            'activeBorrowings'
        ));
    }
}