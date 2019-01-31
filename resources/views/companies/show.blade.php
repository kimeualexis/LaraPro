@extends('layouts.app')

@section('content')
    <div class="page-header">
    <h1 class="jumbotron-heading text-center text-primary"><strong>{{ $company->name }}</strong></h1>
    <p class="text-center">{{ $company->description }}</p>
</div>
<br>

@foreach($company->projects as $project)
<div class="col-md-3">
<div class="card mb-4 box-shadow">
    <div class="card-title">
        <h2 class="text-center">{{ $project->name }}</h2>
    </div>
    <div class="card-body">
        <p class="card-text">{{ $project->description }}</p>
        <div class="d-flex justify-content-between align-items-center">
            <small class="text-muted">Days: {{ $project->days }}</small>
            <div class="btn-group">
                <a href="/projects/{{ $project->id }}" class="btn btn-md btn-outline-primary">View</a>&nbsp;
                <button type="button" class="btn btn-md btn-outline-success">Edit</button>
            </div>
          </div>

    </div>
</div>
</div>
@endforeach
@endsection
