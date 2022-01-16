@extends('app')

@section('content')

<table class="table table-bordered border-primary">
    <tr class="table-dark">
        <th>Id</th>
        <th>Model type</th>
        <th>Exparation date</th>
        <th>Issue date</th>
        <th>Police administration id </th>
    </tr>

    @foreach($passports as $passport)
        <tr>
            <td>{{ $passport->id}}</td>
            <td>{{ $passport->model_type}}</td>
            <td>{{ $passport->exparation_date}}</td>
            <td>{{ $passport->issue_date}}</td>
            <td>{{ $passport->police_administration_id}}</td>
        </tr>
    @endforeach
    <tr></tr>
</table>
@endsection