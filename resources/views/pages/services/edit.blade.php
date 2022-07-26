@extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Service</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Service</li>
            </ol>

            <form action="{{ route('admin.services.update', $service->id) }}" method="POST">
                @csrf
                <div class="row">
                    <div class="form-group col-md-4 mt-3">
                        <div>
                            <label for="title">Font Awesome Icon</label>
                            <input type="text" class="form-control" id="icon" name="icon"
                                value="{{ $service->icon }}">
                        </div>
                        <div>
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title"
                                value="{{ $service->title }}">
                        </div>
                        <div>
                            <label for="title">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3">{{ $service->description }}</textarea>
                        </div>
                    </div>
                </div>
                <input type="submit" name="submit" class="btn btn-primary mt-5" value="Update">

            </form>
        </div>
    </main>
@endsection
