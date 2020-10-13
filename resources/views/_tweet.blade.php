<div class=""
    style="margin-right: 5vw;
            margin-left: 5vw;
            ">    


    <div class="flex p-2 {{ $loop->last ? '' : '' }}">
        
        {{-- <div class="flex p-4 {{ $loop->last ? '' : 'border-b border-b-gray-400' }}"> --}}
        
        <div  class="rounded-full mr-2xl"
                style="display:flex;
                border: 1px solid #4299e1;">
                
            <div class="mr-2" style="flex-shrink:0;">
                <a href="{{ $tweet->user->path() }}">
                        <img src="{{ $tweet->user->avatar }}" 
                            style="height: 60px" 
                            class="rounded-full mr-2" 
                            alt=""
                        >    
                </a> 
            </div>

            {{-- TWEET POST --}}

        

            <div style="padding-right: 5vw;">

                <h5 class="font-bold"
                    style="margin-top:1vw"
                >
                    <a href="{{ $tweet->user->path() }}">
                        {{ $tweet->user->name}}
                    </a>
                </h5>
            
                @if ($tweet->image != NULL)
                    <div class="col-4">
                        <img src= {{ asset('storage/' . $tweet->image )}}>
                    </div>
                @endif         

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
  



