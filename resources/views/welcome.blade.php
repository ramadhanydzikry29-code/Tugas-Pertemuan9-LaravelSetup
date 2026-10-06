@extends('layouts.app')
@section('title', 'Home')

@section('content')
    <p class="text-xs tracking-widest text-pink-500 mb-2">TUGAS PERTEMUAN 9</p>
    <h1 class="text-4xl font-bold mb-2">Halo, {{ $name }}! 👋</h1>
    <p class="text-slate-400 mb-8">Selamat datang di project Laravel pertamaku.</p>

    <h2 class="text-xl font-semibold mb-3">Yang sudah dipelajari</h2>
    <ul class="grid sm:grid-cols-2 gap-3">
        @foreach ($courses as $c)
            <li class="rounded-lg border border-slate-800 bg-slate-900 px-4 py-3">
                <span class="text-emerald-400 font-mono mr-2">{{ $loop->iteration }}.</span>{{ $c }}
            </li>
        @endforeach
    </ul>
@endsection
