@extends('layouts/dashboard')

@section('content')
    <h2>Detail Project Page (Overview Detail Project)</h2>
    <a href="/">Back to home</a>
    <div class="box">
        <a href="/project/{{$id_project}}/task/{{$id_task}}">Task 1</a>
    </div>
@endsection
