@extends('layouts.app')

@section('content')
    <main id="login" class="container-fluid">
        <div class="calWrapper">
            <h1>WBZ BACKEND - Willkommen!</h1>
            <h3>Hier bitte einloggen:</h3>
            <section class="formWrapper">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="email" class="label">{{ __('E-Mail') }}</label>
                        <div>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="is-invalid">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password">{{ __('Passwort') }}</label>
                        <div>
                            <input id="password" class="form-control @error('password') is-invalid @enderror" type="password" name="password">
                            @error('password')
                                <span class="is-invalid">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" value="Anmelden" class="btn btn-primary">
                    </div>
                </form>
            </section>
        </div>
    </main>
@endsection
