<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::all();
        return view('members.index', compact('members'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'member_code' => 'required|string|unique:members,member_code',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string',
        ]);

        Member::create($request->all());
        return redirect()->route('members.index')->with('success', 'Anggota berhasil ditambahkan.');
    }

    public function destroy(Member $member)
    {
        $member->delete();
        return redirect()->route('members.index')->with('success', 'Anggota berhasil dihapus.');
    }
}