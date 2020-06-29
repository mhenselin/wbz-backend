<section class="container-fluid">
    <div class="row">
        <figure id="logo" class="col-2">
            <img src="/img/layout/wbz-logo-weiss.svg" alt="Logo Walter Böthel Zahntechnik" class="max-w-xs lg:max-w-300">
        </figure>
        <div class="col-8"></div>
        @guest
        @else
            <div class="col">
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-primary">
                    {{ __('LOGOUT') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
            @endguest
    </div>
</section>