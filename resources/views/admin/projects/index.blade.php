@extends('layouts.admin')

@section('content')
    <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">Aggiungi nuovo progetto</a>
    <h1>Lista progetti:</h1>
    @foreach ($projects as $project)
        <h3><a href="{{ route('admin.projects.show', $project->id) }}">{{ $project->title }}</a></h3>
        <p>{{ $project->description }}</p>
        <h6>{{ $project->year }}</h6>
    @endforeach
@endsection
