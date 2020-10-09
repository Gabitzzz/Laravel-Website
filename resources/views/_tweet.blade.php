    <div class="flex p-4 {{ $loop->last ? '' : 'border-b border-b-gray-400' }}">
        <div class="mr-2" style="flex-shrink:0;">
            <a href="{{ $tweet->user->path() }}">
                    <img src="{{ $tweet->user->avatar }}" 
                        style="height: 50px" 
                        class="rounded-full mr-2" 
                        alt=""
                    >    
            </a> 
        </div>

        {{-- TWEET POST --}}
        <div>
            <h5 class="font-bold mb-4">
                <a href="{{ $tweet->user->path() }}">
                    {{ $tweet->user->name}}
                </a>
            </h5>

            <p class="text-sm mb-3">
                {{ $tweet->body }}
            </p>
            
            
            @if ($tweet->image != NULL)
                <div class="col-4">
                    <img src= {{ asset('storage/' . $tweet->image )}}>
                </div>
            @endif

          
            @auth
                <x-like-buttons :tweet="$tweet" />
            @endauth
        </div> 
      

        {{-- DELETE/EDIT BUTTONS --}}
        @auth
            <x-deledit :tweet="$tweet" />
         @endauth


    </div>

    {{-- COMMENTS --}}
    @auth
        <x-comments :tweet="$tweet" />
    @endauth

        
    
  



