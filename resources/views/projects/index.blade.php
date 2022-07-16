@extends('layout')

@section('title', 'Portfolio')

@section('content')
    <h1>@lang('Portfolio')</h1>
    <ul>
        @forelse ($projects as $project)
            <li><a href="{{ route('projects.show', $project) }}">{{ $project->title }}</a></li>
        @empty
            <li>@lang('No hay proyectos para mostrar')</li>
        @endforelse
        {{ $projects->links() }}
    </ul>
@endsection