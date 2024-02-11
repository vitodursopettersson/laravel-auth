@extends('layouts.admin')

@section('content')
    <form action="{{ route('admin.projects.update', $project->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo progetto</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $project->title }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" id="description" rows="3" name="description">{{ $project->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="year" class="form-label">Anno</label>
            <input type="text" class="form-control" id="year" name="year" value="{{ $project->year }}">
        </div>
        <input type="submit" class="btn btn-primary" value="Salva">
    </form>
    <a href="{{ route('admin.projects.index') }}" class="btn btn-warning">Annulla</a>
@endsection
