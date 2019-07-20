<header class="row border-bottom sticky-top header">

    <div class="container align-self-center nopadding">

        <div class="row align-items-center">

            <div class="col-md-12 col-lg-2">
                <a href="/" class="logo">
                    {{--WEXLANG--}}
                    <img src="https://2code.info/demo/themes/Discy/Main/wp-content/themes/discy/images/logo.png" alt="">
                </a>
            </div>

            <nav class="col-md-12 col-lg header-menu">

                @auth
                    <a href="{{ route('reader_texts') }}">READER</a>
                @endauth

                @guest
                    <a href="{{ route('reader_landing') }}">READER</a>
                @endguest

                @auth
                    <a href="{{ route('rt_my_texts') }}">Read Together</a>
                @endauth

                @guest
                    <a href="{{ route('rt_landing') }}">Read Together</a>
                @endguest


                <a href="{{route('qa_index')}}">Q & A</a>

            </nav>

            <div class="col-md-12 col-lg-auto nav-left">

                @guest
                <a href="{{ route('login') }}" class="btn btn-primary noradius"><i class="icofont-login"></i> LOGIN</a>
                <a href="{{ route('register') }}" class="btn btn-primary noradius"><i class="icofont-user-alt-3"></i> REGISTER</a>
                @endguest

                @auth

                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>


                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>


                @endauth

            </div>

        </div>

    </div>

</header>