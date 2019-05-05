
        
        <ul class='nav dg' >
        
                    <li class='nav-item'>
                    
                        <a class='nav-link' href="/">Home</a>
                    </li>
       
            @if (Route::has('login'))
                
                    @auth
                    <li class='nav-item'>
                    
                        <a class='nav-link' href="{{ url('/home') }}">Home</a>
                    </li>
                    @else
                    <li class='nav-item'>
                        <a class='nav-link' href="{{ route('login') }}">Login</a>
                    </li>

                        @if (Route::has('register'))
                        <li class='nav-item'>
                            <a class='nav-link' href="{{ route('register') }}">Register</a>
                        </li>
                        @endif
                    @endauth
                
            @endif

            <li class='nav-item'>
                    <a class='nav-link' href="/gym/create">Create a gym</a>
            </li>

            <li class='nav-item'>
                <a class='nav-link' href="/bodybuilder/create"> Add a bodybuilder </a>
            </li>    

             </ul>
       