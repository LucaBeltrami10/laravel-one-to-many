@extends('layouts.app')

@section('title', 'Projects')

@section('content')

<div class="container">
    <form action="{{ route('admin.projects.store') }}" method="post">
        @csrf

        <div class="mb-3">
          <label for="project_name" class="form-label">Nome Progetto</label>
          <input type="text" class="form-control" id="project_name" name="project_name">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione progetto</label>
            <input type="text" class="form-control" id="description" name="description">
        </div>
        <div class="mb-3">
            <label for="language_used-name" class="form-label">Linguaggi utilizzati</label>
            <input type="text" class="form-control" id="language_used"  name="language_used">
        </div>
        <div class="mb-3">
            <label for="framework_used" class="form-label">Frameword utilizzati</label>
            <input type="text" class="form-control" id="framework_used" name="framework_used">
        </div>
        {{-- <div class="mb-3">
            <label class="form-label" for="status" >Status</label>
            <input type="text" class="form-control" id="status" name="status">
            
          </div> --}}
        <div class="mb-3">
            <label for="status" class="form-check-label">Status</label>
            <input type="checkbox" name="status" id="status" class="form-check-inline">
        </div>
        <div class="mb-3">
            <label for="repository_url" class="form-label">Url Repository</label>
            <input type="text" class="form-control" id="repository_url" name="repository_url">
        </div>
        
        <button type="submit" class="btn btn-primary">Invia</button>
      </form>
</div>

@endsection