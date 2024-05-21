@extends('layouts.admin')

@section('content')
    <div class="container">

        <div class="table-responsive">
            <table class="table table-warning mt-5">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Project Start</th>
                        <th scope="col">Project End</th>
                        <th scope="col">Link to Source Code</th>
                        <th scope="col">Link to Project View</th>
                    </tr>
                </thead>
                <tbody>
                    <a class="text-decoration-none" href="{{ route('admin.projects.show', $project) }}">cane
                    </a>
                    @foreach ($projects as $project)
                        <tr class="">
                                <td scope="row">{{ $project->title }}</td>
                                <td scope="row">{{ $project->description }}</td>
                                <td scope="row">{{ $project->project_start_date }}</td>
                                <td scope="row">{{ $project->project_end_date }}</td>
                                <td scope="row">{{ $project->link_to_source_code }}</td>
                                <td scope="row">{{ $project->link_to_project_view }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
