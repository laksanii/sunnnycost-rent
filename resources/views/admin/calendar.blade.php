@extends('layout.admin.main')

@section('css-js')
    <link rel="stylesheet" href="{{ asset('assets/css/calendar/main.min.css') }}">
    <script src="{{ asset('assets/js/calendar/main.min.js') }}"></script>
    <script src="{{ asset('assets/js/calendar/locales-all.js') }}"></script>
    <script src="{{ asset('assets/js/calendar.js') }}"></script>
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Sunnyrent Cost</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Costumes List</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <div id="calendar" class="text-decoration-none"></div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('script')
@endsection
