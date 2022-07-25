@extends('layouts.admin_layout')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Main</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Main</li>
        </ol>

        <form action="{{ route('admin.main.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{method_field('PUT')}}
            <div class="row">
                <div class="form-group col-md-3 mt-3">
                    <h3>Background Image</h3>
                    <img src="{{ url($main->bc_img) }}" alt="" style="height: 30vh" class="img-thumbnail">
                    <input type="file" id="bc_img" name="bc_img">
                </div>
                <div class="form-group col-md-4 mt-3">
                    <div>
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{$main->title}}">
                    </div>
                    <div>
                        <label for="title">Subtitle</label>
                        <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{$main->subtitle}}">
                    </div>
                    <div>
                        <label for="title">Upload Resume</label>
                        <input type="file" class="form-control" id="resume" name="resume" value="{{}}">
                    </div>
                </div>
            </div>
        <input type="submit" name="submit" class="btn btn-primary mt-5">

        </form>
        </div>
</main>
@endsection

