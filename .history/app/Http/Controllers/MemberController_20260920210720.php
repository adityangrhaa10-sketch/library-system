<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        return 'Daftar Member';
    }

    public function show($id)
    {
        return 'ID Member: ' . $id;
    }
}