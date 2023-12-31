@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row my-5">
            <div class="col-12 my-3">
                <h2>
                    {{ $project->name }}
                </h2>
                <p>
                    {{ $project->description }}
                </p>
                @if (isset($project->cover_image))
                    <div class="cover">                        
                        <img src="{{ asset('storage/'.$project->cover_image) }}" alt="Cover {{ $project->name }}">
                    </div>
                @endif
            </div>
            <div class="col-12">
                <div class="btns justify-content-end">
                    <a href="{{ route('admin.projects.index') }}" class="btn btn-primary">
                        Torna alla lista
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection