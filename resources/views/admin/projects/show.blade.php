@extends('layouts.admin')

@section('content')
    <h1>{{$project->name}}</h1>
    <p>{{$project->description}}</p>
    @if ($project->cover_image)
    <img src="{{asset("storage/$project->cover_image")}}" alt="{{$project->name}}">   
    @endif
@endsection