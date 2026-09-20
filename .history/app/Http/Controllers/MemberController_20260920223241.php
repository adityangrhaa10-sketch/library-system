<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $members = [
            'Ahmad Rizky',
            'Siti Nurhaliza',
            'Bambang Pamungkas',
            'Dewi Lestari',
            'Fajar Nugraha'
        ];

        return view('members.index', compact('members'));
    }
}