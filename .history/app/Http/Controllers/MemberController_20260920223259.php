<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $members = [
            'Aditya Nugraha',
            'Muhammad Rheza',
            'Trinanda Iman',
            'Dewi Lestari',
            'Fajar Nugraha'
        ];

        return view('members.index', compact('members'));
    }
}