@extends('layouts.admin')

@section('content')
    <h1><a href="{{ route('admin.projects.index') }}">Torna indietro</a></h1>
    <h2>Progetto:</h2>
    <h3>{{ $project->title }}</h3>
    <p>{{ $project->description }}</p>
    <h6>{{ $project->year }}</h6>
    <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-warning">Modifica</a>
@endsection
