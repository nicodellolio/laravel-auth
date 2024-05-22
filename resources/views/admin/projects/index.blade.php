@extends('layouts.admin')

@section('content')
    <div class="container">

        <div class="table-responsive ">
            <table class="table table-light table-hover mt-5">
                <thead class="">
                    <tr class="fw-bolder fs-5 table-secondary">
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Project Start</th>
                        <th scope="col">Project End</th>
                        <th scope="col">Show</th>
                    </tr>
                </thead>
                <tbody class="">

                    <tr class="p-bg-light">

                        <td colspan="5" height="60" class="align-middle text-center fw-bolder" scope="row">

                            <a class="text-decoration-none text-success fs-5" href="{{route('admin.projects.create')}}">
                                
                                Add a new project
                            
                            </a>
                            

                        </td>
                    </tr>

                    @foreach ($projects as $project)
                        <tr class="p-bg-light">
                            <td class="align-middle" scope="row">{{ $project->title }}</td>
                            <td class="align-middle w-50 fw-light" scope="row">{{ $project->description }}</td>
                            <td class="align-middle" scope="row">{{ $project->project_start_date }}</td>
                            <td class="align-middle" scope="row">{{ $project->project_end_date }}</td>
                            <td class="align-middle" scope="row">
                                <a class="text-decoration-none text-dark fs-4"
                                    href="{{ route('admin.projects.show', $project) }}">
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
