
<header class="p-3 mb-3 border-bottom">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none"> 
                <x-application-logo class=" " role="img"  aria-label="Storefront" stroke-width="1.5" stroke="currentColor" class="bi me-2" width="40" height="32" />
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0"> 
                <li>   <a href="/" class="nav-link px-2 link-dark">homepage</a></li>
                <li>  <a href="{{route('product.create')}}" class="nav-link px-2 link-dark">+ add a product</a></li>
                <li>  <a href="{{route('product.index')}}" class="nav-link px-2 link-dark">product list</a> </li>

            </ul>
 
            @if (Route::has('login'))

            <div class="">
                @auth
                   
                <div class="dropdown text-end">
                    <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="mdo" class="rounded-circle" width="32"
                            height="32">
                    </a>
                    <ul class="dropdown-menu text-small" style="">
                        <li><a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a></li>
                     <!--   <li><a class="dropdown-item" href="#">Settings</a></li>-->
                  
                        <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a></li> 
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form  method="POST" action="{{ route('logout') }}">
                                @csrf 
                                <a  class="dropdown-item"  :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                            </a>
                            </form>
                        </li>
                        
                    </ul> 
                </div> 
    

                @else
                    <a href="{{ route('login') }}" class="">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="">Register</a>
                    @endif
                @endauth
            </div>
        @endif
 
        </div>
    </div>
</header>
 
