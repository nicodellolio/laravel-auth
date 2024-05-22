@extends('layouts.admin')

@section('content')

    <div class="edit-form">

        <form action="" method="get"></form>

    </div>
















    <tr class="">
        <td scope="row">{{ $project->title }}</td>
        <td scope="row">{{ $project->description }}</td>
        <td scope="row">{{ $project->project_start_date }}</td>
        <td scope="row">{{ $project->project_end_date }}</td>
        <td scope="row">{{ $project->link_to_source_code }}</td>
        <td scope="row">{{ $project->link_to_project_view }}</td>
    </tr>
@endsection
