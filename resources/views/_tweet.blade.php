<div class=""
    style="margin-right: 5vw;
            margin-left: 5vw;
            ">    


    <div class="flex p-2 {{ $loop->last ? '' : '' }}">
        
        {{-- <div class="flex p-4 {{ $loop->last ? '' : 'border-b border-b-gray-400' }}"> --}}
        
        <div  class="rounded-full mr-2xl"
                style="display:flex;
                border: 1px solid #4299e1;">
                
            <div style="flex-shrink:0;">
                <a href="{{ $tweet->user->path() }}">
                        <img src="{{ $tweet->user->avatar }}" 
                            style="height: 65px" 
                            class="rounded-full mr-2" 
                            alt=""
                        >    
                </a> 
            </div>

            {{-- TWEET POST --}}

        

            <div style="padding-right: 2vw;">

                <h5 class="font-bold"
                    style="margin-top:1vw"
                >
                    <a href="{{ $tweet->user->path() }}">
                        {{ $tweet->user->username}}
                    </a>
                </h5>
            
            </div> 

        </div>
            
        {{-- DELETE/EDIT BUTTONS --}}
       <div style>
            @auth
                <x-deledit :tweet="$tweet" />
            @endauth
       </div>

       
    </div>

    

    <div class="rounded-full"
            style="padding-left: 4vw; padding-right: 4vw; padding-top:1vw;"
            >
        <p class="text-sm mb-3 ">
            {{ $tweet->body }}
        </p>
        
        <p class="text-xs"
            style="text-align: right;">
            Posted {{ $tweet->created_at->format('d/m/Y')}}
         </p>

        @if ($tweet->image != NULL)
            <div class="">
                <img src= {{ asset('storage/' . $tweet->image )}}>
            </div>
        @endif

    </div>

    <hr style="border-top: 1px solid #4299e1;">


      {{-- LIKE/UNLIKE BUTTONS --}}
    @auth
      <x-like-buttons :tweet="$tweet" />
    @endauth
    

    <br>

    {{-- COMMENTS --}}
    @auth
        <x-comments :tweet="$tweet" />
    @endauth

    
</div>
  



