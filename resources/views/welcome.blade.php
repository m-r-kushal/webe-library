@extends('layout')

@section('page-content')
    <br><br>
    {{-- Replace fixed width card with responsive grid column --}}
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-8 col-md-6 mx-auto">
                <div class="card border-primary rounded-lg">
                    <div class="card-body">
                        <p class="text-center text-primary">
                            {{-- responsive icon size --}}
                            <i class="bi bi-book-half" style="font-size: clamp(2.5rem, 6vw, 5rem)"></i>
                        </p>
                        <hr class="bg-primary">
                        <h1 class="text-center text-primary">Library Management  <br> System</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
