@extends('layouts.admin');

@section('content')
    <div class="container">
        <div class="row my-3">
            <div class="col-12">
                <h2 class="my-3">
                    Projects
                </h2>
                <table class="table">
                    <tr>
                        <th>
                            Nome
                        </th>
                        <th>
                            Descrizione
                        </th>
                        <th>
                            Gestisci
                        </th>
                    </tr>
                    @foreach ($projects as $project)
                        <tr>
                            <td>
                                {{ $project->name }}
                            </td>
                            <td>
                                {{ $project->description }}
                            </td>
                            {{-- BTN CRUD --}}
                            <td>
                                <div class="btns">
                                    <a href="{{ route('admin.projects.show', $project->id) }}" class="btn btn-secondary">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                    <a href="#" class="btn btn-info">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection