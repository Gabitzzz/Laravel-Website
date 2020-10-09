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

        
        {{-- <section class="px-8 py-4 mb-6 w-full"
                    style="background-color: red;
                            display:inline-block" >
            <header class="container mx-auto"
                        >
                
                    <ul>
                       <li> <img src="https://raw.githubusercontent.com/laracasts/Tweety/6b1b30e7fba003d08e0274f7f8fc6a804c9bfe7b/public/images/logo.svg" 
                            alt="Tweety"
                            style="  display: inline-block;
                            vertical-align: top;
                            height: 50px;
                            "
                        >
                        </li>

                        <li>
                            <h1 style=" display: inline-block;
                            vertical-align: top;
                            margin-right: 20px;
                            height: 80px;        
                            line-height: 80px; ">hi</h1>
                        </li>
                    </ul>
              
             
            </header>

           
        </section> --}}

        <nav class="navbar navbar-expand-lg navbar sticky-top navbar-light bg-light">
            <div class="col-md-2"></div>
            
            <div class="col-md-2">
                <img src="https://raw.githubusercontent.com/laracasts/Tweety/6b1b30e7fba003d08e0274f7f8fc6a804c9bfe7b/public/images/logo.svg" 
                alt="Tweety"
                style="  
                height: 50px;
                ">
            </div>
          
            {{-- <div class="col-md-4">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <form action="{{ route('home') }}" 
                        class="form-inline my-2 my-lg-0">
                        <input name="query" 
                            value="{{ old('query')  }}" 
                            class="form" 
                            type="search" 
                            placeholder="Search" 
                            aria-label="Search" 
                            style="width: 20vw; border-radius: 10%; padding-left: 2vw;" >                       

                        <button 
                                class="bg-blue-500 hover:bg-blue-700 rounded-lg shadow px-10 text-sm text-white h-10" 
                                type="submit"
                            >Search
                        </button>
                    </form>

                   
                </div>
            </div> --}}


            <form action="{{ route('search') }}" method="GET">
                <input type="text" name="search" required/>
                <button type="submit">Search</button>
            </form>
         
        </nav>
        
      {{ $slot }}
    </div>



    <script src="http://unpkg.com/turbolinks"></script>
 

</body>
</html>
