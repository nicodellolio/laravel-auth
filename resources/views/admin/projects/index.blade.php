@extends('layouts.admin')

@section('content')
    <div class="container">

        <div class="table-responsive ">
            <table class="table table-light table-hover mt-5">
                <thead class="">
                    <tr class="table-secondary">
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Project Start</th>
                        <th scope="col">Project End</th>
                        <th scope="col">Show</th>
                    </tr>
                </thead>
                <tbody class="">
                    @foreach ($projects as $project)
                        <tr class="p-bg-light">
                            <td scope="row">{{ $project->title }}</td>
                            <td scope="row">{{ $project->description }}</td>
                            <td scope="row">{{ $project->project_start_date }}</td>
                            <td scope="row">{{ $project->project_end_date }}</td>
                            <td>
                                <a class="text-decoration-none text-dark fs-4" href="{{ route('admin.projects.show', $project) }}">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>
@endsection
