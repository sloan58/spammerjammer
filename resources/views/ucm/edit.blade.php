@extends('layouts.app', ['activePage' => 'ucm.index', 'titlePage' => __('Edit UCM Settings')])

@section('content')
    <div class="content">
        <div class="container-fluid">

            <example-component></example-component>

{{--            <form>--}}
{{--                <div class="form-row">--}}
{{--                    <div class="col">--}}
{{--                        <label for="name">Name</label>--}}
{{--                        <input type="text"--}}
{{--                               class="form-control"--}}
{{--                               id="name"--}}
{{--                               value="{{ $ucm->name }}"--}}
{{--                        >--}}
{{--                    </div>--}}
{{--                    <div class="col">--}}
{{--                        <label for="description">Description</label>--}}
{{--                        <input type="text"--}}
{{--                               class="form-control"--}}
{{--                               id="description"--}}
{{--                               value="{{ $ucm->description }}"--}}
{{--                        >--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </form>--}}
        </div>
    </div>
@endsection
