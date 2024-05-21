@extends('layouts.admin')

@section('content')
    <div class="container mt-5">

        <div class="row">

            <div class="col">
                <div class="card">
                    <div class="card-title">
                        {{ $project->title }}
                    </div>

                    <div class="card-body">
                        <p class="card-text">
                            {{$project->description}}
                        </p>
                        <div class="project-date">
                            <div class="projectStart">
                                {{$project->project_start_date}}
                            </div>
                            <div class="projectEnd">
                                {{$project->project_end_date}}
                            </div>
                        </div>
                    </div>

                    <div class="card-footer d-flex">
                        <a href="{{$project->link_to_project_view}}">
                            Preview
                        </a>
                        <a href="{{$project->link_to_source_code}}">
                            View Source Code
                        </a>
                    </div>
                    
                </div>
            </div>

        </div>

    </div>
@endsection
