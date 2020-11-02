<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" 
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
            crossorigin="anonymous">

            <link
            rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
            integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"
            crossorigin="anonymous"
          />


    <style>
        input{
        border:none;
        height: 50px;
    }

        input:focus, textarea:focus
        {
            outline-offset: 0px;
            outline: none;
        }
    </style>

</head>
<body>

    <div id="app">

        <nav class="navbar navbar-expand-lg navbar sticky-top"
                style="background-image: linear-gradient(#f9f9fc, white);">
            <div class="col-md-2"></div>
            
            <div class="col-md-2">
              
            </div>
          
                {{-- SEARCH BAR --}}
            <form action="{{ route('search') }}" 
                    method="GET"
            >

                <input type="text" 
                        name="search"
                        style="padding-left:1vw; 
                                border: 1px solid hsl(207, 73%, 57%);
                                padding-right:10vw;"
                        class="rounded-full mr-2xl"
                        placeholder="search" 
                        required/>

                <button class="bg-blue-500 hover:bg-blue-700 rounded-lg shadow px-3 text-sm text-white h-12"
                        type="submit"
                        style="color: white; border-radius: 50%; margin-left:0.5vw;"
                        >
                    
                    <i class="fa fa-search" aria-hidden="true"></i>    
                </button>
            </form>
                {{--  END OF SEARCH BAR --}}

                {{-- HOME BUTTON --}}
            <a 
                class="font-bold text-lg block" 
                href="{{route('home')}}">
                    <button type="button"  
                            class="bg-blue-500 hover:bg-blue-700 rounded-lg shadow px-3 text-sm text-white h-12"
                            style="color: white; border-radius: 50%; margin-left:3vw;"
                    >
                    <i class="fa fa-home" aria-hidden="true"></i>    
                        
                    </button>

            </a>
                {{-- END OF HOME BUTTON --}}


                   {{-- EXPLORE PAGE BUTTON --}}
            <a class="font-bold text-lg" href="/Laravel/tweety/public/explore">
                <button type="button"  
                        class="bg-green-500 hover:bg-green-700 rounded-lg shadow px-3 text-sm text-white h-12"
                        style="color: white; border-radius:50%; margin-left:0.5vw;"
                >
                <i class="fa fa-globe" aria-hidden="true"></i>
        
                </button>
            </a>
                    {{-- END OF EXPLORE PAGE BUTTON --}}

            
                    {{-- EXPLORE NOTIFICATIONS BUTTON --}}
            <a class="font-bold text-lg" href="/Laravel/tweety/public/explore">
                <button type="button"  
                        class="bg-red-500 hover:bg-red-700 rounded-lg shadow px-3 text-sm text-white h-12"
                        style="color: white; border-radius:50%; margin-left:0.5vw;"
                >
                <i class="fa fa-bell" aria-hidden="true"></i>
        
                </button>
            </a>
                    {{-- END OF EXPLORE NOTIFICATIONS BUTTON --}}
            
        



            @if (Auth::check())

                        {{-- PROFILE BUTTON --}}
                        <a 
                        class="font-bold text-lg" 
                        href="{{ route('profile', auth()->user() ) }}">
                            <div style="display: inline;">
                                <button type="button"  
                                    style="color: white; display:flex; margin-left:0.5vw; "
                                >
                                    <img src="{{ auth()->user()->avatar}}" 
                                        alt="your photo"
                                        style="width: 50px; "
                                        class="rounded-full mr-2-xl">
        
                                    <h5 style="color: black; margin-top: 0.5vw; margin-left:0.5vw;">
                                        {{ auth()->user()->username}}
                                    </h5>
        
                                </button>        
                                
                            </div>  
                    </a>
                            {{-- END OF PROFILE BUTTON --}}


                <form action="{{ url('/logout') }}" 
                        method="POST"
                        style="margin-left: 10vw;">
                    @csrf
                        
                    <button class="bg-red-500 hover:bg-red-700 rounded-lg shadow px-3 text-sm text-white h-12" 
                            style="color: white; border-radius: 50%; margin-left:0.5vw;"
                    >
                        <i class="fa fa-power-off" aria-hidden="true"></i>                      
                    </button>
                </form>
            @endif
        </nav>
        
      {{ $slot }}
    </div>



    <script src="http://unpkg.com/turbolinks"></script>
 

</body>
</html>
