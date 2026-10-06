@extends('layouts.app')
@section('title', 'Contact')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Contact</h1>

    <ul class="space-y-3 mb-10">
        @foreach ($contacts as $c)
            <li class="rounded-lg border border-slate-800 bg-slate-900 px-4 py-3">
                <span class="text-slate-400">{{ $c['label'] }}:</span> {{ $c['value'] }}
            </li>
        @endforeach
    </ul>

    <h2 class="text-xl font-semibold mb-3">Data dari database (Model Course)</h2>
    @forelse ($courses as $course)
        <p>• {{ $course->name }} ({{ $course->credits }} SKS)</p>
    @empty
        <p class="text-slate-500 text-sm">Tabel courses masih kosong. Isi lewat <code>php artisan tinker</code>.</p>
    @endforelse
@endsection
