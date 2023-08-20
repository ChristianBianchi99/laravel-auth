@extends('layouts.admin');

@section('content')
    <h2>
        Questi sono i progetti
    </h2>
    <table class="table">
        <tr>
            <th>
                Nome
            </th>
            <th>
                Descrizione
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
            </tr>
        @endforeach
    </table>
@endsection