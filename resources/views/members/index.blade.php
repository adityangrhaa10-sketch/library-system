@extends('layouts.app')

@section('title', 'Daftar Member')

@section('content')
    <h2>Daftar Member</h2>

    @if(count($members) > 0)
        <ul>
            @foreach($members as $member)
                <li>{{ $member }}</li>
            @endforeach
        </ul>
    @else
        <p>Belum ada member terdaftar.</p>
    @endif
@endsection