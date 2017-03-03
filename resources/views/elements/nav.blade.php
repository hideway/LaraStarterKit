@if (Route::has('login'))

    @if (Auth::check())
        <a href="{{ url('/home') }}">Home</a>
    @else
        <a href="{{ url('/login') }}">Login</a>
        <a href="{{ url('/register') }}">Register</a>
    @endif

@endif