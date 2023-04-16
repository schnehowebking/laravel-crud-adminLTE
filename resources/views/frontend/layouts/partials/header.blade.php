<header class="navigation fixed-top">
    <nav class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand font-tertiary h3" href="{{ route('frontend.index') }}"><img src="images/logo.png" alt="RSECORE"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
        aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse text-center" id="navigation">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('frontend.index') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('frontend.about') }}">about</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('frontend.blog') }}">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('frontend.payment') }}">Payment</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('frontend.pricing') }}">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('frontend.contact') }}">Contact</a>
          </li>

            @if (Route::has('login'))
            <li class="nav-item">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </li>
            @endif

        </ul>
      </div>
    </nav>
  </header>
