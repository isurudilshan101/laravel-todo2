@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="page-title">Home Page</h1>
            </div>
        </div>
    </div>
@endsection


@push('css')
    <style>
        .page-title {
            padding-top: 15vh;
            color: blue;
            font-size: 5rem;
        }

    </style>
@endpush
