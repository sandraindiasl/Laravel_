@extends('layout')

@section('title', 'Proyecto')

@section('content')
    <h1>@lang('Projects')</h1>
    <a href="{{ route('projects.create') }}">Crear proyecto</a>
    <ul>
        @forelse ($projects as $project)
            <li><a href="{{ route('projects.show', $project) }}">{{ $project->title }}</a></li>
        @empty
            <li>@lang('No hay proyectos para mostrar')</li>
        @endforelse
        {{ $projects->links() }}
    </ul>
@endsection