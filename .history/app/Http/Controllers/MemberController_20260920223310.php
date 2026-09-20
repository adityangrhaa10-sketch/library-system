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
            'Rama Wahyu',
            'Ahmad Fahmi'
        ];

        return view('members.index', compact('members'));
    }
}