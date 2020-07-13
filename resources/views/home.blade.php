@extends('layouts.app')

@section('content')
    <main id="main" class="container-fluid">
        <div class="calWrapper">
            <h1>TERMINKALENDER</h1>
            {{--
            <form class="w-11/12 mx-auto mt-4" method="post" action="{{ route('event_store') }}">
                @csrf
                <calendar-component></calendar-component>
            </form>
            --}}
            <calendar-component></calendar-component>
        </div>
    </main>
@endsection
