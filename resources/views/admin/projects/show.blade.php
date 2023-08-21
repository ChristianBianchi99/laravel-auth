@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <h2>
                    {{ $project->name }}
                </h2>
                <p>
                    {{ $project->description }}
                </p>
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