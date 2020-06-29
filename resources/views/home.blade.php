@extends('layouts.app')

@section('content')
    <main id="main" class="container-fluid">
        <div class="calWrapper">
            <h1>TERMINKALENDER</h1>
            <div class="w-11/12 mx-auto mt-4">
                <div id="calendar"></div>
                @include('calendar.createEvent')
            </div>
        </div>
    </main>
@endsection
