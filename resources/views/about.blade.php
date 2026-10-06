@extends('layouts.app')
@section('title', 'About')

@section('content')
    <h1 class="text-3xl font-bold mb-6">About</h1>

    <dl class="rounded-lg border border-slate-800 bg-slate-900 divide-y divide-slate-800 mb-8">
        @foreach ($profile as $label => $value)
            <div class="flex px-4 py-3">
                <dt class="w-40 text-slate-400">{{ $label }}</dt>
                <dd>{{ $value }}</dd>
            </div>
        @endforeach
    </dl>

    <h2 class="text-xl font-semibold mb-3">Skills</h2>
    <div class="flex flex-wrap gap-2">
        @foreach ($skills as $s)
            <span class="px-3 py-1 rounded-full bg-pink-500/10 text-pink-400 text-sm">{{ $s }}</span>
        @endforeach
    </div>
@endsection
