@extends('layouts.app', ['activePage' => 'ucm.index', 'titlePage' => __('UCM Systems')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-md-center">
                @foreach($ucms as $ucm)
                <div class="card shadow-lg p-3 rounded mr-5" style="width: 20rem;">
                    <div class="card-body">
                        <h4 class="card-title font-weight-bold">{{ $ucm->name }}</h4>
                        <hr>
                        <h6 class="card-subtitle mb-2 text-muted">Last seen ????</h6>
                        <p class="card-text">{{ $ucm->description }}</p>
    {{--                        <a href="#0" class="card-link">Edit</a>--}}
                        <a href="{{ route('ucm.edit', $ucm->slug) }}" class="card-link">
                            <button type="button" class="btn btn-sm btn-info">Edit</button>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
