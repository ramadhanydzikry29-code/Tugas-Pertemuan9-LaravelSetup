@extends('layouts.app')
@section('title', 'Hello')

@section('content')
    <h1 class="text-4xl font-bold">Hello, <span class="text-pink-500">{{ $nama }}</span>! 🚀</h1>
    <p class="text-slate-400 mt-3">Ini route parameter <code>/hello/{nama}</code>.</p>
@endsection
